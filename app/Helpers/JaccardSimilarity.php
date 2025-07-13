<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;
use Sastrawi\StopWordRemover\StopWordRemover;

class JaccardSimilarity
{
    public static function calculateTermFrequencies($documents, $queryTokens)
    {
        $allTerms = [];

        // Kumpulkan semua term unik dari dokumen
        foreach ($documents as $doc) {
            foreach ($doc['tokens'] as $term) {
                $allTerms[] = $term;
            }
        }

        // Tambahkan juga dari query
        foreach ($queryTokens as $term) {
            $allTerms[] = $term;
        }

        $uniqueTerms = array_values(array_unique($allTerms));

        $tfTable = [];

        foreach ($uniqueTerms as $term) {
            $row = ['term' => $term];

            // Hitung TF untuk tiap dokumen
            foreach ($documents as $index => $doc) {
                $count = array_count_values($doc['tokens'])[$term] ?? 0;
                $row["D" . ($index + 1)] = $count;
            }

            // Hitung TF untuk query
            $row["Q"] = array_count_values($queryTokens)[$term] ?? 0;

            $tfTable[] = $row;
        }

        return $tfTable;
    }

    public static function calculateTFWeight($tfTable, $docCount)
    {
        $tfWeightTable = [];

        foreach ($tfTable as $row) {
            $newRow = ['term' => $row['term']];

            // Proses setiap dokumen
            for ($i = 1; $i <= $docCount; $i++) {
                $tf = $row["D$i"];
                $newRow["D$i"] = $tf > 0 ? round(1 + log10($tf), 4) : 0;
            }

            // Proses Query
            $tfQ = $row['Q'];
            $newRow['Q'] = $tfQ > 0 ? round(1 + log10($tfQ), 4) : 0;

            $tfWeightTable[] = $newRow;
        }

        return $tfWeightTable;
    }

    public static function calculateIDF($tfTable, $docCount)
    {
        $idfTable = [];

        foreach ($tfTable as $row) {
            $term = $row['term'];

            // Hitung DF (jumlah dokumen yang memiliki term ini)
            $df = 0;
            for ($i = 1; $i <= $docCount; $i++) {
                if (!empty($row["D$i"]) && $row["D$i"] > 0) {
                    $df++;
                }
            }

            // Hitung IDF (hindari pembagian nol)
            $idf = $df > 0 ? round(log10($docCount / $df), 4) : 0;
            // $idf = log10(($docCount + 1) / ($df + 1)) + 1;

            $idfTable[] = [
                'term' => $term,
                'df' => $df,
                'idf' => $idf
            ];
        }

        return $idfTable;
    }

    public static function calculateTFIDF($tfWeightTable, $idfTable, $docCount)
    {
        $tfidfTable = [];
        $idfMap = array_column($idfTable, 'idf', 'term');

        foreach ($tfWeightTable as $tfRow) {
            $term = $tfRow['term'];
            $idf = $idfMap[$term] ?? 0;

            $row = ['term' => $term];

            // Kalikan TF Weight * IDF untuk tiap dokumen
            for ($i = 1; $i <= $docCount; $i++) {
                $tfWeight = $tfRow["D$i"];
                $row["D$i"] = round($tfWeight * $idf, 4);
            }

            // Kalikan untuk Query
            $tfWeightQ = $tfRow["Q"];
            $row["Q"] = round($tfWeightQ * $idf, 4);

            $tfidfTable[] = $row;
        }   

        return $tfidfTable;
    }

    public static function calculateJaccardSimilarity(array $tfidfTable, int $docCount): array
    {
        $results = [];

        // Loop tiap dokumen D1…Dn
        for ($i = 1; $i <= $docCount; $i++) {
            $intersection = 0;
            $union = 0;

            foreach ($tfidfTable as $row) {
                $docVal = $row["D{$i}"];
                $qVal   = $row["Q"];

                // Term dihitung di union jika hadir di doc ATAU query
                if ($docVal > 0 || $qVal > 0) {
                    $union++;
                    // Kalau hadir di KEDUANYA, hitung di intersection
                    if ($docVal > 0 && $qVal > 0) {
                        $intersection++;
                    }
                }
            }

            // Simpan skor (0 kalau tidak ada union)
            $results["D{$i}"] = $union > 0
                ? round($intersection / $union, 4)
                : 0;
        }
        arsort($results); 
        return $results;
    }

}