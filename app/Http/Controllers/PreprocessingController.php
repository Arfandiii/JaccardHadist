<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hadist;
use App\Helpers\PreprocessingText;
use App\Helpers\JaccardSimilarity;
use App\Models\DocumentTerm;
use App\Models\Query;
use App\Models\QueryTerm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class PreprocessingController extends Controller
{
    /**
     * Mengambil semua dokumen hadis dari database
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getHadistDocuments()
    {
        $dataHadist = Hadist::with('kitab', 'perawi')
        ->limit(10) // Ambil hanya 10 data hadist
        ->get();

        return $dataHadist->map(function ($hadist) {
            return [
                'id' => $hadist->id,
                'no_hadist' => $hadist->no_hadist,
                'kitab' => $hadist->kitab->nama_kitab,
                'perawi' => $hadist->perawi->nama_perawi,
                'isi_hadist' => $hadist->isi_hadist,
            ];
        })->toArray();
    }

    public function preprocessHadistDocuments()
    {
        $documents = $this->getHadistDocuments();

        foreach ($documents as &$document) {
            $preprocessingResult = PreprocessingText::preprocessText($document['isi_hadist']);
            $document['tokens'] = $preprocessingResult;
        }

        return $documents;
    }

    public function preprocessHadistDocumentsDetailed()
    {
        // Ambil 10 hadist (sesuai pembaruan di getHadistDocuments)
        $documents = $this->getHadistDocuments();
    
        $detailed = [];
    
        // Proses tiap hadist
        foreach ($documents as $doc) {
            $pre = PreprocessingText::preprocessTextDetailed($doc['isi_hadist']);
            // Gabungkan hasil preprocessing ke dalam dokumen
            $detailed[] = array_merge($doc, [
                'preprocessing' => $pre,
            ]);
        }
    
        // Tambahkan dokumen query dengan format yang sama
        $query = "amal niat rasulullah bersabda islam salat iman orang puasa haji.";
        $preQuery = PreprocessingText::preprocessTextDetailed($query);
    
        $detailed[] = [
            'id'           => null,
            'no_hadist'    => null,
            'kitab'        => 'Query',
            'perawi'       => '-',
            'isi_hadist'   => $query,
            'preprocessing'=> $preQuery,
        ];
        
        return $detailed;
    }
    

    public function resultPreprocessing()
    {
        // Ambil dokumen hadist
        $documentsHadist = $this->getHadistDocuments();
        $documents = $this->preprocessHadistDocuments();
        $documentsdetailed = $this->preprocessHadistDocumentsDetailed();
        
        // Contoh query yang akan diproses
        $query = "amal niat rasulullah bersabda islam salat iman orang puasa haji.";
        $preprocessedQuery = PreprocessingText::preprocessText($query);
        
        // TF
        $tfTable = JaccardSimilarity::calculateTermFrequencies($documents, $preprocessedQuery);
        
        // // TF Weight
        $tfWeightTable = JaccardSimilarity::calculateTFWeight($tfTable, count($documents));
        
        // // IDF
        $idfTable = JaccardSimilarity::calculateIDF($tfTable, count($documents));

        // // TF-IDF
        $tfidfTable = JaccardSimilarity::calculateTFIDF($tfWeightTable, $idfTable, count($documents));
        
        // // Cosine Similarity
        $jaccardScores = JaccardSimilarity::calculateJaccardSimilarity($tfidfTable, count($documents));
        
        return view('sections.result', compact(
            'documentsHadist',
            'documents',
            'documentsdetailed',
            'query',
            'preprocessedQuery',
            'tfTable',
            'tfWeightTable',
            'idfTable',
            'tfidfTable',
            'jaccardScores',
        ));
    }

    private function storeTFIDF(int $HadistId, array $tokens, array $idfTable): void
    {
        // 1. Hitung Term Frequency
        $tf = array_count_values($tokens);

        // 2. Buat mapping IDF
        $idfMap = array_column($idfTable, 'idf', 'term');

        // 3. Simpan ke tabel document_terms
        foreach ($tf as $term => $count) {
            $tfWeight = $count > 0 ? round(1 + log10($count), 4) : 0;
            $idf = $idfMap[$term] ?? 0;
            $tfidf = round($tfWeight * $idf, 4);

            DocumentTerm::updateOrCreate(
                ['hadist_id' => $HadistId, 'term' => $term],
                ['tf' => $count, 'tfidf' => $tfidf]
            );
        }
    }

    public function preprocessAllHadist()
    {
        $dataHadist = Hadist::all();
        $tokenMap = [];
        
        // 1. Preprocess semua hadist
        foreach ($dataHadist as $hadist) {
            $tokenMap[$hadist->id] = PreprocessingText::preprocessText($hadist->isi_hadist);
        }

        // 2. Buat format dokumen untuk TF & IDF
        $documentList = collect($tokenMap)->map(fn($tokens) => ['tokens' => $tokens])->values()->all();
        $docCount = count($documentList);

        // 3. Hitung TF, TF Weight, dan IDF global
        $jaccardSimilarity = new JaccardSimilarity();
        $tfTable = $jaccardSimilarity->calculateTermFrequencies($documentList, []);
        $tfWeightTable = $jaccardSimilarity->calculateTFWeight($tfTable, $docCount);
        $idfTable = $jaccardSimilarity->calculateIDF($tfTable, $docCount);

        // 4. Proses dan simpan TF-IDF untuk masing-masing hadist
        foreach ($dataHadist as $hadist) {
            $tokens = $tokenMap[$hadist->id];
            $this->storeTFIDF($hadist->id, $tokens, $idfTable);
        }

        return redirect()->back()->with('success', 'Preprocessing semua hadist selesai.');
    }


    public static function preprocessQuery(string $query): array
    {
        // 1. Simpan query ke database
        $queryModel = Query::create(['user_input' => $query]);
        
        // 2. Preprocessing: tokenize, stopword removal, stemming
        $queryTokens = PreprocessingText::preprocessText($query);
        
        // 3. Hitung Term Frequency (TF) dari query
        $queryTF = array_count_values($queryTokens);
        $terms   = array_keys($queryTF);
        
        // 4. Ambil IDF global untuk hanya term yang muncul di query (cached)
        $totalDocs = Hadist::count();
        $key = 'idf_map:' . md5(implode('|', $terms));
        $idfMap = Cache::remember(
            $key,
            now()->addMinutes(10),
            function () use ($terms, $totalDocs) {
                return DB::table('document_terms')
                ->select('term', DB::raw('COUNT(DISTINCT hadist_id) as df'))
                ->whereIn('term', $terms)
                ->groupBy('term')
                ->get()
                ->mapWithKeys(function ($row) use ($totalDocs) {
                    $idf = $row->df > 0 ? round(log10($totalDocs / $row->df), 4) : 0;
                    return [$row->term => $idf];
                })
                ->toArray();
            }
        );
        
        // 5. Hitung dan simpan TF, TF-weight, dan TF-IDF ke query_terms,
        //    sekaligus kumpulkan vektor TF-IDF untuk return
        $queryTFIDF = [];

        DB::transaction(function () use (&$queryTFIDF, $queryModel, $queryTF, $idfMap) {
            foreach ($queryTF as $term => $count) {
                $tfWeight = $count > 0 ? round(1 + log10($count), 4) : 0;
                $idf = $idfMap[$term] ?? 0;
                $tfidf = round($tfWeight * $idf, 4);
        
                QueryTerm::updateOrCreate(
                    ['query_id' => $queryModel->id, 'term' => $term],
                    ['tf' => $count, 'tfidf' => $tfidf]
                );
        
                $queryTFIDF[$term] = $tfidf;
            }
        });
        
        // 6. Kembalikan vektor TF-IDF query dan daftar term
        return [
            'tfidf' => $queryTFIDF,
            'terms' => $terms
        ];
    }
}
