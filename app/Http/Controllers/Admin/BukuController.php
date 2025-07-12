<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BukuController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipe = 'buku';
        $validated = $request->validate([
            'judul'        => 'required|string|max:255',
            'pengarang'    => 'required|string|max:255',
            'penerbit'     => 'required|string|max:255',
            'tahun_terbit' => 'required|string|max:4',
            'stock'        => 'required|integer|min:0',
            'photo'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // default null
        $path = null;

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            // pastikan nama file unik
            $file      = $request->file('photo');
            $fileName  = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $path      = $file->storeAs('buku', $fileName, 'public');
        }

        // Simpan ke database
        Buku::create([
            'judul'        => $request->judul,
            'pengarang'    => $request->pengarang,
            'penerbit'     => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stock'        => $request->stock,
            'photo'        => $path,
        ]);

        // Redirect with tipe as query parameter
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        return view('admin.data.buku.show', compact('buku'));
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
