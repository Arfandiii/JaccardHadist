@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto mb-12">
    <!-- Book grid -->
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar Buku</h2>
    <div class="mb-8">
        {{ $buku->links() }}
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($buku as $buku)
        <div
            class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 transition hover:shadow-xl hover:scale-[1.02] duration-300 flex flex-col">
            <a href="{{ route('buku.detail', $buku->id) }}">
                {{-- Cover Buku --}}
                <img class="h-48 w-full object-cover"
                    src="{{ asset($buku->photo ? 'storage/' . $buku->photo : 'storage/cover-buku/default-cover.png') }}"
                    alt="Cover Buku {{ $buku->judul }}">
            </a>
            <div class="p-5 flex flex-col flex-1">
                {{-- Badge pengarang dan tahun terbit --}}
                <span
                    class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded mb-2 w-fit">
                    {{ $buku->pengarang }} • {{ $buku->tahun_terbit }}
                </span>

                {{-- Judul Buku --}}
                <a href="{{ route('buku.detail', $buku->id) }}">
                    <h5 class="text-lg font-semibold text-gray-800 hover:text-green-600 transition mb-1 truncate">
                        {{ $buku->judul }}
                    </h5>
                </a>

                {{-- Penerbit --}}
                <p class="text-sm text-gray-500 mb-4 italic">
                    {{ $buku->penerbit }}
                </p>

                {{-- Tombol --}}
                <div class="mt-auto flex items-center justify-between">
                    <a href="{{ route('buku.detail', $buku->id) }}"
                        class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Lihat Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>

                    {{-- Stok --}}
                    <span class="text-xs text-gray-500 italic ml-2">
                        Stok: {{ $buku->stock }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection