<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hadist;
use App\Models\Kitab;
use App\Models\Perawi;
use Illuminate\Http\Request;

class HadistController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataKitab = Kitab::all();
        $DataPerawi = Perawi::all();
        return view('admin.data.hadist.create', compact('DataKitab', 'DataPerawi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipe = 'hadist';
        $validated = $request->validate([
            'no_hadist' => 'required|integer',
            'isi_hadist' => 'required|string',
            'kitab_id' => 'required|exists:kitab,id',
            'perawi_id' => 'required|exists:perawi,id',
        ]);

        // Cek duplikasi berdasarkan no_hadist, kitab_id, dan perawi_id
        $exists = Hadist::where('no_hadist', $validated['no_hadist'])
            ->where('kitab_id', $validated['kitab_id'])
            ->where('perawi_id', $validated['perawi_id'])
            ->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['no_hadist' => 'No Hadist dengan Kitab dan Perawi yang sama sudah ada.']);
        }

        Hadist::create($validated);

        // Redirect with tipe as query parameter
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data hadist berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hadist $hadist)
    {
        $DataKitab = Kitab::all();
        $DataPerawi = Perawi::all();
        return view('admin.data.hadist.show', compact('hadist', 'DataKitab', 'DataPerawi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hadist $hadist)
    {
        // dd($hadist);
        $DataKitab = Kitab::all();
        $DataPerawi = Perawi::all();
        return view('admin.data.hadist.edit', compact('hadist', 'DataKitab', 'DataPerawi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipe = 'hadist';
        $validated = $request->validate([
            'no_hadist' => 'required|integer',
            'isi_hadist' => 'required|string',
            'kitab_id' => 'required|exists:kitab,id',
            'perawi_id' => 'required|exists:perawi,id',
        ]);

        $hadist = Hadist::findOrFail($id);

        // Cek duplikasi, kecuali untuk data yang sedang diedit
        $exists = Hadist::where('no_hadist', $validated['no_hadist'])
            ->where('kitab_id', $validated['kitab_id'])
            ->where('perawi_id', $validated['perawi_id'])
            ->where('id', '!=', $hadist->id)
            ->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['no_hadist' => 'No Hadist dengan Kitab dan Perawi yang sama sudah ada.']);
        }

        $hadist->update($validated);

        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data hadist berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tipe = 'hadist';
            $hadist = Hadist::findOrFail($id);
            $hadist->delete();
            return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data Hadist berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus Hadist: ' . $e->getMessage());
        }
    }
}
