<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'digits:4',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            $destination = public_path('storage/cover-buku');
            if (!file_exists($destination)) {
                mkdir($destination, 0777, true); // buat folder jika belum ada
            }

            $file->move($destination, $filename);

            $data['photo'] = 'cover-buku/' . $filename;
        }
        // ✅ Simpan data ke database
        Buku::create($data);

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
    public function edit(Buku $buku)
    {
        return view('admin.data.buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipe = 'buku';
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|digits:4',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4048',
        ]);

        // Ambil buku yang akan diupdate
        $buku = Buku::findOrFail($id);

        // Jika ada file baru
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            $destination = public_path('storage/cover-buku');
            if (!file_exists($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $filename);

            // Hapus file lama jika ada
            if ($buku->photo && file_exists(public_path('storage/' . $buku->photo))) {
                unlink(public_path('storage/' . $buku->photo));
            }

            $data['photo'] = 'cover-buku/' . $filename;
        }

        // Update data
        $buku->update($data);

        // Redirect kembali dengan pesan
        return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])->with('success', 'Data buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tipe = 'buku';
            $buku = Buku::findOrFail($id);
            $buku->delete();
            return redirect()->route('admin.dashboard.data', ['tipe' => $tipe])
            ->with('success', 'Data buku berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus buku: ' . $e->getMessage());
        }
    }
}
