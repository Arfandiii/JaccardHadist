<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;
use Sastrawi\StopWordRemover\StopWordRemover;

class JaccardSimilarity {
    public static function calculateTermFrequencies($documents, $preprocessedQuery)
    {
        $allDocs = $documents;
        $allDocs[] = $preprocessedQuery; // add query as last document
        $tfTable = [];
        foreach ($allDocs as $docIndex => $doc) {
            $words = preg_split('/\s+/', strtolower($doc));
            foreach ($words as $word) {
                if ($word === '') continue;
                if (!isset($tfTable[$word][$docIndex])) {
                    $tfTable[$word][$docIndex] = 0;
                }
                $tfTable[$word][$docIndex]++;
            }
        }
        return $tfTable;
    }

    public static function calculateTFWeight($tfTable, $docCount)
    {
        $tfWeightTable = [];
        foreach ($tfTable as $term => $docFreqs) {
            for ($i = 0; $i < $docCount + 1; $i++) {
                $tf = isset($docFreqs[$i]) ? $docFreqs[$i] : 0;
                $tfWeightTable[$term][$i] = $tf > 0 ? 1 + log10($tf) : 0;
            }
        }
        return $tfWeightTable;
    }

    public static function calculateIDF($tfTable, $docCount)
    {
        $idfTable = [];
        foreach ($tfTable as $term => $docFreqs) {
            $df = 0;
            for ($i = 0; $i < $docCount; $i++) {
                if (isset($docFreqs[$i]) && $docFreqs[$i] > 0) {
                    $df++;
                }
            }
            $idfTable[$term] = $df > 0 ? log10($docCount / $df) : 0;
        }
        return $idfTable;
    }

    public static function calculateTFIDF($tfWeightTable, $idfTable, $docCount)
    {
        $tfidfTable = [];
        foreach ($tfWeightTable as $term => $weights) {
            for ($i = 0; $i < $docCount + 1; $i++) {
                $tfidfTable[$term][$i] = $weights[$i] * ($idfTable[$term] ?? 0);
            }
        }
        return $tfidfTable;
    }

    public static function JaccardSimilarity($tfidfTable, $docCount)
    {
        $similarities = [];
        // Query is the last document
        $queryIndex = $docCount;
        for ($i = 0; $i < $docCount; $i++) {
            $intersection = 0;
            $union = 0;
            foreach ($tfidfTable as $term => $weights) {
                $a = $weights[$i];
                $b = $weights[$queryIndex];
                if ($a > 0 && $b > 0) {
                    $intersection++;
                }
                if ($a > 0 || $b > 0) {
                    $union++;
                }
            }
            $similarities[$i] = $union > 0 ? $intersection / $union : 0;
        }
        return $similarities;
    }
}