<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Hadist;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function buku(Request $request)
    {
        $query = $request->input('query');
        $buku = Buku::paginate(12);

        $buku = Buku::when($query, function ($q) use ($query) {
            return $q->where('judul', 'like', '%' . $query . '%')
                    ->orWhere('pengarang', 'like', '%' . $query . '%')
                    ->orWhere('penerbit', 'like', '%' . $query . '%');
        })->paginate(12);
        $buku->appends(['query' => $query]);
        return view('sections.books', compact('buku', 'query'));
    }
    
    public function hadist()
    {
        $results = Hadist::paginate(10);
        return view('sections.hadist', compact('results'));
    }
    
    public function hero(){
        $buku = Buku::orderBy('created_at', 'desc')->take(4)->get();
        return view('sections.hero', compact('buku'));
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('sections.detail-book', compact('buku'));
    }
}
