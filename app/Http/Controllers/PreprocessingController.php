<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hadist;
use App\Helpers\PreprocessingText;
use App\Helpers\JaccardSimilarity;

class PreprocessingController extends Controller
{
    /**
     * Mengambil semua dokumen hadis dari database
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getHadisDocuments()
    {
        $ids = [];
        $dataHadist = Hadist::whereIn('id', $ids)->with('kitab', 'perawi')->get();

        return $dataHadist->map(function ($hadist) {
            return [
                'no_hadist' => $hadist->no_hadist,
                'kitab' => $hadist->kitab->nama_kitab,
                'perawi' => $hadist->perawi->nama_perawi,
                'isi_hadist' => $hadist->isi_hadist,
            ];
        })->toArray();
    }

    public function preprocessHadisDocuments()
    {
        $documents = $this->getHadisDocuments();

        foreach ($documents as &$document) {
            $preprocessingResult = PreprocessingText::preprocessText($document['isi_hadist']);
            $document['tokens'] = $preprocessingResult;
        }

        return $documents;
    }

    public function preprocessHadisDocumentsDetailed()
    {
        $documents = $this->getHadisDocuments();

        foreach ($documents as &$document) {
            $preprocessingResult = PreprocessingText::preprocessTextDetailed($document['isi']);
            $document['preprocessing'] = $preprocessingResult;
        }

        // Tambahkan dokumen query
        $query = "Terpidana melarikan diri dari tempat pidana penjara.";
        $queryPreprocessing = PreprocessingText::preprocessTextDetailed($query);

        $documents[] = [
            'buku' => 'Query',
            'bab' => '-',
            'pasal' => 'Query',
            'isi' => $query,
            'preprocessing' => $queryPreprocessing
        ];
        // dd($documents);

        return $documents;
    }

    public function resultPreprocessing()
    {
        // Ambil dokumen pasal
        $documentsPasal = $this->getHadisDocuments();
        $documents = $this->preprocessHadisDocuments();
        $documentsdetailed = $this->preprocessHadisDocumentsDetailed();
        
        // Contoh query yang akan diproses
        $query = "Terpidana melarikan diri dari tempat pidana penjara.";
        $preprocessedQuery = PreprocessingText::preprocessText($query);
        
        // TF
        $tfTable = JaccardSimilarity::calculateTermFrequencies($documents, $preprocessedQuery);
        
        // TF Weight
        $tfWeightTable = JaccardSimilarity::calculateTFWeight($tfTable, count($documents));
        
        // IDF
        $idfTable = JaccardSimilarity::calculateIDF($tfTable, count($documents));

        // TF-IDF
        $tfidfTable = JaccardSimilarity::calculateTFIDF($tfWeightTable, $idfTable, count($documents));
        
        // Cosine Similarity
        $cosineSimilarities = JaccardSimilarity::JaccardSimilarity($tfidfTable, count($documents));
        
        return view('sections.result', compact(
            'documentsPasal',
            'documents',
            'query',
            'preprocessedQuery',
            'tfTable',
            'tfWeightTable',
            'idfTable',
            'tfidfTable',
            'cosineSimilarities',
            'documentsdetailed'
        ));
    }
}
