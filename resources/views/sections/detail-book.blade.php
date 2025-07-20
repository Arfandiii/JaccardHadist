@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mb-12">
    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 mb-6">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Kembali
    </a>

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
        <div class="flex flex-wrap lg:flex-row gap-8 w-full">
            <!-- Cover Image -->
            <div class="lg:w-1/2 w-full">
                <img src="{{ asset($buku->photo ? 'storage/' . $buku->photo : 'storage/cover-buku/default-cover.png') }}"
                    alt="Cover {{ $buku->judul }}" class="w-full h-96 lg:h-full object-cover rounded-l-2xl shadow-lg">
            </div>

            <!-- Details -->
            <div class="lg:w-1/2 w-full p-6 lg:p-8 space-y-6">
                <!-- Title & Author -->
                <div>
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900">{{ $buku->judul }}</h1>
                    <p class="text-lg text-green-600 font-semibold mt-1">{{ $buku->pengarang }}</p>
                    <p class="text-gray-600">{{ $buku->tahun_terbit }} • {{ $buku->penerbit }}</p>
                </div>

                <!-- Description -->
                <div class="border-t pt-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $buku->deskripsi ?? 'Deskripsi tidak tersedia.' }}
                    </p>
                </div>

                <!-- Details Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                    <div class="flex items-center bg-gradient-to-r from-green-50 to-white p-5 rounded-xl shadow-sm">
                        <div>
                            <p class="text-gray-500">ISBN</p>
                            <p class="font-semibold text-gray-800">{{ $buku->isbn ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gradient-to-r from-green-50 to-white p-5 rounded-xl shadow-sm">
                        <div>
                            <p class="text-gray-500">Jumlah Halaman</p>
                            <p class="font-semibold text-gray-800">{{ $buku->jumlah_halaman ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gradient-to-r from-green-50 to-white p-5 rounded-xl shadow-sm">
                        <div>
                            <p class="text-gray-500">Bahasa</p>
                            <p class="font-semibold text-gray-800">{{ $buku->bahasa ?? 'Indonesia' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gradient-to-r from-green-50 to-white p-5 rounded-xl shadow-sm">
                        <div>
                            <p class="text-gray-500">Stok Tersedia</p>
                            <p class="font-bold text-green-600 text-lg">{{ $buku->stock }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection