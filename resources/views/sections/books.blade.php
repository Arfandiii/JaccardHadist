@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto mb-12">
    <!-- Book grid -->
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar Buku</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @for ($i = 1; $i <= 8; $i++) <div
            class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200 flex flex-col overflow-hidden">
            <div class="h-40 bg-gradient-to-br from-green-200 to-green-400 flex items-center justify-center">
                <svg class="w-16 h-16 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path
                        d="M4 19.5A2.5 2.5 0 0 0 6.5 22h11a2.5 2.5 0 0 0 2.5-2.5V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v13.5z" />
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                </svg>
            </div>
            <div class="p-4 flex-1 flex flex-col">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Judul Buku {{ $i }}</h3>
                <p class="text-gray-500 text-sm mb-4 flex-1">Deskripsi singkat buku ini. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.</p>
                <a href="#"
                    class="mt-auto inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm text-center">Lihat
                    Detail</a>
            </div>
    </div>
    @endfor
</div>
</div>
@endsection