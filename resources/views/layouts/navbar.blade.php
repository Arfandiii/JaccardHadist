<div class="container mx-auto px-4">
    <!-- Green banner -->
    <div class="bg-gradient-to-r from-green-400 to-green-600 h-10 rounded-b-lg shadow-lg mb-8"></div>
    <div class="max-w-7xl mx-auto">

        <!-- Navigation -->
        <div class="flex justify-between items-center mb-12">
            <nav class="flex justify-start space-x-8">
                <a href="{{ route('hero') }}"
                    class="{{ Request::is('/') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Beranda</a>
                <a href="{{ route('buku') }}"
                    class="{{ Request::is('buku*') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Buku</a>
                <a href="{{ route('hadist') }}"
                    class="{{ Request::is('hadist*') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Hadis</a>
                <a href="{{ route('result') }}"
                    class="{{ Request::is('result*') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Jaccard
                    Similarity</a>
            </nav>
            <div class="flex gap-4 justify-end items-center w-1/2">
                @if (Request::is('buku*'))
                <div class="w-1/2">
                    <form action="#" method="GET">
                        <input type="text" name="q" placeholder="Cari Buku"
                            class="border border-green-600 w-full max-w-sm py-2 px-2 rounded focus:outline-none focus:ring-1 focus:ring-green-600">
                    </form>
                </div>
                @elseif (Request::is('hadist*') || Route::is('hadist.process'))
                <div class="w-1/2">
                    <form action="{{ route('hadist.process') }}" method="POST">
                        @csrf
                        <input type="text" name="query" placeholder="Cari Hadist..."
                            value="{{ old('query', $query ?? '') }}"
                            class="border border-green-600 w-full max-w-sm py-2 px-2 rounded focus:outline-none focus:ring-1 focus:ring-green-600">
                    </form>
                </div>
                @endif
                <div>
                    @auth
                    {{-- Jika sudah login, tampilkan tombol Logout --}}
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                            class="cursor-pointer text-gray-600 hover:text-red-600 transition text-lg">
                            Logout
                        </button>
                    </form>
                    @else
                    {{-- Jika belum login, tampilkan link Login --}}
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-green-600 transition text-lg">
                        Login
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>