<?php

namespace App\Http\Controllers;

use App\Models\DocumentTerm;
use App\Models\Hadist;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    private function getGroundTruthhadistIds(array $terms, int $minMatchCount = 1): array
    {
        if (empty($terms)) {
            return [];
        }

        return DB::table('document_terms')
            ->select('hadist_id')
            ->whereIn('term', $terms)
            ->groupBy('hadist_id')
            ->havingRaw('COUNT(DISTINCT term) >= ?', [$minMatchCount])
            ->pluck('hadist_id')
            ->unique()
            ->toArray();
    }

    public function search(Request $request)
    {
        // [1] Simpan query baru ke session
        if ($request->isMethod('post')) {
            $query = $request->input('query');
            if (blank($query)) {
                return redirect()->route('hadist')
                    ->with('error','Inputan tidak boleh kosong.');
            }
            $preprocessed = PreprocessingController::preprocessQuery($query);
            session([
                'search_keyword'      => $query,
                'search_preprocessed' => $preprocessed,
            ]);
            return redirect()->route('hadist.process');
        }

        // [2] Ambil data dari session
        $query        = session('search_keyword');
        $preprocessed = session('search_preprocessed');
        if (blank($query) || blank($preprocessed)) {
            return redirect()->route('hadist')
                ->with('error','Query tidak ditemukan dalam sesi.');
        }

        $terms = array_keys($preprocessed['tfidf']); // term unik query

        // ——————————————————————————
        // Tentukan ground truth: dokumen dianggap relevan
        // jika memiliki minimal 2 term dari query (minMatchCount = 2)
        $groundTruthIds = $this->getGroundTruthhadistIds($terms, 2);

        // Ambil kandidat dokumen yang mengandung minimal 1 term query
        $candidateIds = DocumentTerm::whereIn('term', $terms)
                        ->pluck('hadist_id')->unique();

        // Ambil SEMUA term dari setiap kandidat
        $docTerms = DocumentTerm::whereIn('hadist_id', $candidateIds)
                    ->get(['hadist_id','term'])
                    ->groupBy('hadist_id');

        // ——————————————————————————
        // Hitung Jaccard similarity sebagai prediksi
        $similarities = [];
        foreach ($docTerms as $hid => $rows) {
            $docSet   = $rows->pluck('term')->unique()->toArray();
            $union    = array_unique(array_merge($terms, $docSet));
            $intersec = array_intersect($terms, $docSet);
            $score    = count($union) ? round(count($intersec)/count($union),4) : 0;

            // Prediksi relevan jika similarity ≥ 0.2
            if ($score >= 0.2) {
                $similarities[] = [
                    'hadist_id'  => $hid,
                    'similarity' => $score
                ];
            }
        }
        usort($similarities, fn($a,$b)=>$b['similarity']<=>$a['similarity']);
        $predictedIds = array_column($similarities,'hadist_id');

        // ——————————————————————————
        // Confusion Matrix
        $totalDocs      = Hadist::count();                     // total dokumen
        $tp = count(array_intersect($predictedIds, $groundTruthIds));   // benar relevan
        $fp = count(array_diff($predictedIds, $groundTruthIds));       // salah prediksi relevan
        $fn = count(array_diff($groundTruthIds, $predictedIds));       // relevan tapi tak terdeteksi
        $tn = $totalDocs - $tp - $fp - $fn;                           // sisanya

        $precision = ($tp + $fp) ? round($tp/($tp+$fp), 4) : 0;
        $recall    = ($tp + $fn) ? round($tp/($tp+$fn), 4) : 0;
        $f1_score  = ($precision + $recall)
                    ? round(2*$precision*$recall/($precision+$recall), 4)
                    : 0;
        $metrics = compact('tp','fp','fn','tn','precision','recall','f1_score');

        // ——————————————————————————
        // Siapkan hasil untuk view
        $hadists = Hadist::with('kitab','perawi')
                ->whereIn('id', $predictedIds)
                ->get()->keyBy('id');

        $results = [];
        foreach ($similarities as $row) {
            if (isset($hadists[$row['hadist_id']])) {
                $h = $hadists[$row['hadist_id']];
                $h->similarity = $row['similarity'];
                $results[] = $h;
            }
        }

        // Pagination manual
        $perPage = 10;
        $page    = $request->input('page',1);
        $slice   = array_slice($results,($page-1)*$perPage,$perPage);
        $paginator = new LengthAwarePaginator(
            $slice, count($results), $perPage, $page,
            ['path'=>$request->url(),'query'=>$request->query()]
        );

        return view('sections.hadist', [
            'results' => $paginator,
            'query'   => $query,
            'metrics' => $metrics,
        ]);
    }
}
