@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <main class="container mx-auto px-6 py-8">

        {{-- breadcrumb --}}
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ route('admin.dashboard.data') }}" class="text-green-600 hover:underline font-medium">
                &larr; Kembali
            </a>
            <span>/</span>
            <h2 class="font-bold text-3xl">Detail Buku</h2>
        </div>

        {{-- card detail --}}
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="lg:flex">
                {{-- foto sampul --}}
                <div class="lg:w-2/5">
                    <img src="{{ $buku->photo
                                ? Storage::url($buku->photo)
                                : 'https://via.placeholder.com/600x900?text=No+Cover' }}"
                        alt="Sampul {{ $buku->judul }}" class="w-full h-96 lg:h-full object-cover">
                </div>

                {{-- informasi buku --}}
                <div class="lg:w-3/5 p-6 lg:p-10 space-y-5">
                    <h1 class="text-4xl font-bold text-gray-800">{{ $buku->judul }}</h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 text-base">
                        <div>
                            <span class="font-semibold text-gray-600">Pengarang:</span>
                            <p class="text-gray-800">{{ $buku->pengarang }}</p>
                        </div>

                        <div>
                            <span class="font-semibold text-gray-600">Penerbit:</span>
                            <p class="text-gray-800">{{ $buku->penerbit }}</p>
                        </div>

                        <div>
                            <span class="font-semibold text-gray-600">Tahun Terbit:</span>
                            <p class="text-gray-800">{{ $buku->tahun_terbit }}</p>
                        </div>

                        <div>
                            <span class="font-semibold text-gray-600">Stok Tersedia:</span>
                            <p class="text-gray-800">{{ $buku->stock }} eksemplar</p>
                        </div>
                    </div>

                    <hr class="my-6">

                    {{-- tombol aksi --}}
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.buku.edit', $buku->id) }}"
                            class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit
                        </a>

                        <form action="{{ route('admin.buku.destroy', $buku->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                            @csrf @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-5 py-2.5 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection