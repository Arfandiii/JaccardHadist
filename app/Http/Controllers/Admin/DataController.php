<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kitab;
use App\Models\Perawi;
use App\Models\Hadist;

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
        $data = null;
    
        if ($tipe === 'hadist') {
            $data = Hadist::with(['kitab', 'perawi'])->paginate(20);
        } elseif ($tipe === 'kitab') {
            $data = Kitab::paginate(10);
        } elseif ($tipe === 'buku') {
            $data = Buku::paginate(10);
        } elseif ($tipe === 'perawi') {
            $data = Perawi::paginate(10);
        }
    
        return view('admin.data.index', compact('counts', 'data', 'tipe'));
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
