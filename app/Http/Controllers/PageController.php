<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Hadist;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function buku()
    {
        $buku = Buku::paginate(12);
        return view('sections.books', compact('buku'));
    }

    public function hadist()
    {
        $hadist = Hadist::paginate(10);
        return view('sections.hadist', compact('hadist'));
    }

    public function hero(){
        $buku = Buku::orderBy('created_at', 'desc')->take(4)->get();
        return view('sections.hero', compact('buku'));
    }
}
