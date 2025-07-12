@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <main class="container mx-auto px-6 py-8">
        {{-- breadcrumb --}}
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ route('admin.dashboard.data') }}" class="text-green-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">Tambah Buku</h2>
        </div>

        {{-- card form --}}
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Form Tambah Buku</h2>

            <form action="{{ route('admin.buku.store') }}" method="POST" enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                @csrf

                {{-- judul --}}
                <div>
                    <label for="judul" class="block mb-1 font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" required value="{{ old('judul') }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('judul')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- pengarang --}}
                <div>
                    <label for="pengarang" class="block mb-1 font-medium text-gray-700">Pengarang</label>
                    <input type="text" name="pengarang" id="pengarang" required value="{{ old('pengarang') }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('pengarang')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- penerbit --}}
                <div>
                    <label for="penerbit" class="block mb-1 font-medium text-gray-700">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" required value="{{ old('penerbit') }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('penerbit')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- tahun terbit --}}
                <div>
                    <label for="tahun_terbit" class="block mb-1 font-medium text-gray-700">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" id="tahun_terbit" maxlength="4" required
                        value="{{ old('tahun_terbit') }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('tahun_terbit')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- stock --}}
                <div>
                    <label for="stock" class="block mb-1 font-medium text-gray-700">Stok</label>
                    <input type="number" min="0" name="stock" id="stock" required value="{{ old('stock') }}"
                        class="w-full text-sm rounded border border-green-300 focus:ring-1 focus:outline-none focus:ring-green-500 focus:border-green-500 p-2.5 bg-gray-50">
                    @error('stock')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- foto sampul (optional) --}}
                <div>
                    <label for="photo" class="block mb-1 font-medium text-gray-700">Foto Sampul (opsional)</label>
                    <input type="file" name="photo" id="photo" accept="image/*"
                        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-green-100 file:text-green-700 hover:file:bg-green-200">
                    @error('photo')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- tombol submit (span 2 kolom di desktop) --}}
                <div class="md:col-span-2 flex justify-end mt-4">
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection