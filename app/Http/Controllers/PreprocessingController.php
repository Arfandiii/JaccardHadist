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
        $dataHadist = Hadist::with('kitab', 'perawi')
        ->limit(10) // Ambil hanya 10 data hadis
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
        // Ambil 10 hadis (sesuai pembaruan di getHadisDocuments)
        $documents = $this->getHadisDocuments();
    
        $detailed = [];
    
        // Proses tiap hadis
        foreach ($documents as $doc) {
            $pre = PreprocessingText::preprocessTextDetailed($doc['isi_hadist']);
            // Gabungkan hasil preprocessing ke dalam dokumen
            $detailed[] = array_merge($doc, [
                'preprocessing' => $pre,
            ]);
        }
    
        // Tambahkan dokumen query dengan format yang sama
        $query = "amal niat rasulullah berwudhu mukmin kuat cucinya.";
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
        // Ambil dokumen pasal
        $documentsHadis = $this->getHadisDocuments();
        $documents = $this->preprocessHadisDocuments();
        $documentsdetailed = $this->preprocessHadisDocumentsDetailed();
        
        // Contoh query yang akan diproses
        $query = "amal niat rasulullah berwudhu mukmin kuat cucinya.";
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
            'documentsHadis',
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
}
