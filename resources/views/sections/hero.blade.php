@extends('layouts.app')
@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Main content -->
    <div
        class="bg-gradient-to-br from-green-100 via-yellow-50 to-green-50 rounded-2xl p-16 mb-12 text-center shadow-lg">
        <h1 class="text-5xl md:text-6xl font-extrabold text-green-700 mb-8 drop-shadow-lg leading-tight">
            PESANTREN DARUSSALAM<br>
            <span class="text-yellow-500">SENGKUBANG</span>
        </h1>
        <div class="relative max-w-lg mx-auto">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center text-green-600 font-medium">
                <span class="bg-green-100 px-3 py-1 rounded-full">Semua Kategori</span>
            </div>
            <input type="text" placeholder="Cari buku atau hadis..."
                class="border border-green-300 rounded-full w-full p-4 pl-40 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-green-400 shadow transition">
        </div>
    </div>

    <!-- Book recommendations -->
    <h2 class="text-2xl font-bold text-green-700 mb-8 text-center">Rekomendasi Buku</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12">
        @foreach([
        [
        'title' => 'Buku Fikih Dasar',
        'desc' => 'Panduan lengkap mengenai dasar-dasar fikih untuk santri pemula di pesantren.',
        'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg'
        ],
        [
        'title' => 'Hadis Pilihan Santri',
        'desc' => 'Kumpulan hadis-hadis pilihan yang sering dipelajari dan diamalkan di lingkungan pesantren.',
        'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg'
        ],
        [
        'title' => 'Sejarah Pesantren Nusantara',
        'desc' => 'Buku yang membahas perkembangan dan peran pesantren di Indonesia dari masa ke masa.',
        'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg'
        ],
        [
        'title' => 'Kitab Akhlak Mulia',
        'desc' => 'Materi akhlak dan adab yang diajarkan untuk membentuk karakter santri yang berakhlak mulia.',
        'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg'
        ]
        ] as $book)
        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 flex flex-col">
            <a href="#">
                <img class="rounded-t-lg" src="{{ $book['img'] }}" alt="" />
            </a>
            <div class="p-5 flex flex-col flex-1">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $book['title'] }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex-1">
                    {{ $book['desc'] }}
                </p>
                <div class="mt-auto">
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Baca selengkapnya
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection