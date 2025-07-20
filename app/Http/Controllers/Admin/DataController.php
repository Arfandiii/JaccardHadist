<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\PreprocessingText;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kitab;
use App\Models\Perawi;
use App\Models\Hadist;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $counts = [
            'buku' => Buku::count(),
            'kitab' => Kitab::count(),
            'perawi' => Perawi::count(),
            'hadist' => Hadist::count()
        ];

        $tipe = $request->query('tipe');
        $query = $request->query('query');
        $data = null;

        if ($tipe === 'hadist') {
            if ($query) {
                // 1. Preprocess query
                $queryTerms = PreprocessingText::preprocessText($query);
                $queryTerms = collect($queryTerms)->unique();

                // 2. Ambil term dokumen yang cocok dengan query
                $docTerms = DB::table('document_terms')
                    ->whereIn('term', $queryTerms)
                    ->get(['hadist_id', 'term'])
                    ->groupBy('hadist_id');

                // 3. Hitung Jaccard Similarity berdasarkan term
                $results = $docTerms->map(function ($terms, $hadistId) use ($queryTerms) {
                    $docTokens = collect($terms)->pluck('term')->unique();

                    $intersection = $queryTerms->intersect($docTokens)->count();
                    $union = $queryTerms->merge($docTokens)->unique()->count();
                    $similarity = $union > 0 ? $intersection / $union : 0;

                    return (object)[
                        'hadist_id' => $hadistId,
                        'similarity' => $similarity
                    ];
                })->sortByDesc('similarity')->filter(fn($item) => $item->similarity > 0);

                // 4. Ambil hadist dari ID hasil
                $hadistIds = $results->pluck('hadist_id');
                $hadists = Hadist::with(['kitab', 'perawi'])
                            ->whereIn('id', $hadistIds)
                            ->get()
                            ->map(function ($item) use ($results) {
                                $item->similarity = $results->firstWhere('hadist_id', $item->id)->similarity;
                                return $item;
                            })->sortByDesc('similarity');

                // 5. Manual Pagination
                $perPage = 10;
                $currentPage = LengthAwarePaginator::resolveCurrentPage();
                $currentItems = $hadists->slice(($currentPage - 1) * $perPage, $perPage)->values();

                $data = new LengthAwarePaginator(
                    $currentItems,
                    $hadists->count(),
                    $perPage,
                    $currentPage,
                    ['path' => url()->current(), 'query' => $request->query()]
                );
            } else {
                $data = Hadist::with(['kitab', 'perawi'])->paginate(20);
            }
        } elseif ($tipe === 'kitab') {
            $data = Kitab::when($query, function ($q) use ($query) {
                return $q->where('nama_kitab', 'like', '%' . $query . '%');
            })->paginate(10);
        } elseif ($tipe === 'buku') {
            $data = Buku::when($query, function ($q) use ($query) {
                return $q->where('judul', 'like', '%' . $query . '%')
                        ->orWhere('pengarang', 'like', '%' . $query . '%');
            })->paginate(10);
        } elseif ($tipe === 'perawi') {
            $data = Perawi::when($query, function ($q) use ($query) {
                return $q->where('nama_perawi', 'like', '%' . $query . '%');
            })->paginate(10);
        }
        
        $isPreprocessed = DB::table('hadists')
            ->whereNotIn('id', function ($query) {
                $query->select('hadist_id')->from('document_terms');
            })
            ->doesntExist(); // TRUE jika SEMUA pasal sudah diproses
    
        return view('admin.data.index', compact('counts', 'data', 'tipe', 'isPreprocessed'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
