<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kitab;
use Illuminate\Http\Request;

class KitabController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data.kitab.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipe = 'kitab';
        $validated = $request->validate([
            'nama_kitab' => 'required|string',
        ]);

        $exists = Kitab::where('nama_kitab', $validated['nama_kitab'])->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nama_kitab' => 'Kitab sudah ada.']);
        }

        Kitab::create($validated);

        // Redirect with tipe as query parameter
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data kitab berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kitab $kitab)
    {
        return view('admin.data.kitab.edit', compact('kitab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipe = 'kitab';
        $validated = $request->validate([
            'nama_kitab' => 'required|string',
        ]); 

        $kitab = Kitab::findOrFail($id);

        // Cek duplikasi, kecuali untuk data yang sedang diedit
        $exists = Kitab::where('nama_kitab', $validated['nama_kitab'])
            ->where('id', '!=', $kitab->id)
            ->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nama_kitab' => 'Kitab sudah ada.']);
        }

        $kitab->update($validated);

        // Redirect with tipe as query parameter
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data kitab berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tipe = 'kitab';
            $kitab = Kitab::findOrFail($id);
            $kitab->delete();
            return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data kitab berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus kitab: ' . $e->getMessage());
        }
    }
}
