<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perawi;
use Illuminate\Http\Request;

class PerawiController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data.perawi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipe = 'perawi';
        $validated = $request->validate([
            'nama_perawi' => 'required|string',
        ]);

        $exists = Perawi::where('nama_perawi', $validated['nama_perawi'])->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nama_perawi' => 'Perawi sudah ada.']);
        }

        Perawi::create($validated);

        // Redirect with tipe as query parameter
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data perawi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perawi $perawi)
    {
        return view('admin.data.perawi.edit', compact('perawi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipe = 'perawi';
        $validated = $request->validate([
            'nama_perawi' => 'required|string',
        ]);

        $perawi = Perawi::findOrFail($id);

        // Cek duplikasi, kecuali untuk data yang sedang diedit
        $exists = Perawi::where('nama_perawi', $validated['nama_perawi'])
            ->where('id', '!=', $perawi->id)
            ->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nama_perawi' => 'Perawi sudah ada.']);
        }

        $perawi->update($validated);

        // Redirect with tipe as query parameter
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data perawi berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tipe = 'perawi';
            $perawi = Perawi::findOrFail($id);
            $perawi->delete();
            return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data Perawi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus Perawi: ' . $e->getMessage());
        }
    }
}
