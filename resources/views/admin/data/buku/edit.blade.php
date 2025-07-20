@extends('admin.layouts.app')

@section('content')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">Edit Data Buku</h2>
        </div>
        <div class="p-6 mb-10 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Ubah Buku</h2>
            <form action="{{ route('admin.buku.update', $buku->id) }}" id="formUpdateBuku" method="POST"
                enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                @method('PUT')
                @csrf

                {{-- judul --}}
                <div>
                    <label for="judul" class="block mb-1 font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" required value="{{ old('judul', $buku->judul) }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('judul')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- pengarang --}}
                <div>
                    <label for="pengarang" class="block mb-1 font-medium text-gray-700">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang" required
                        value="{{ old('pengarang', $buku->pengarang) }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('pengarang')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- penerbit --}}
                <div>
                    <label for="penerbit" class="block mb-1 font-medium text-gray-700">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" required
                        value="{{ old('penerbit', $buku->penerbit) }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('penerbit')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- tahun terbit --}}
                <div>
                    <label for="tahun_terbit" class="block mb-1 font-medium text-gray-700">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" id="tahun_terbit" maxlength="4" required
                        value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('tahun_terbit')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- stock --}}
                <div>
                    <label for="stock" class="block mb-1 font-medium text-gray-700">Stok</label>
                    <input type="number" min="0" name="stock" id="stock" required
                        value="{{ old('stock', $buku->stock) }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('stock')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- foto sampul (optional) --}}
                <div>
                    <label for="image" class="block font-medium text-gray-700 mb-1">Foto Sampul (Opsional)</label>

                    {{-- Preview Foto Saat Ini --}}
                    @if ($buku->photo)
                    <div class="mb-2">
                        <span class="text-sm text-gray-600">Foto sekarang:</span>
                        <div class="mt-1">
                            <img src="{{ asset('storage/' . $buku->photo) }}" alt="Foto Buku Saat Ini"
                                class="w-32 h-44 object-cover rounded border shadow-sm border-green-300">
                        </div>
                    </div>
                    @endif

                    {{-- Input File --}}
                    <input type="file" name="image" id="image" value="{{ old('image', $buku->photo) }}"
                        class="cursor-pointer w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg
                        file:border-0 file:text-sm file:font-semibold file:bg-green-100 file:text-green-700 hover:file:bg-green-200">
                    @error('image')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- tombol submit (span 2 kolom di desktop) --}}
                <div class="md:col-span-2 flex justify-end mt-4">
                    <button type="submit"
                        class="cursor-pointer px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection