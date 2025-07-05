<div class="container mx-auto px-4">
    <!-- Green banner -->
    <div class="bg-gradient-to-r from-green-400 to-green-600 h-10 rounded-b-lg shadow-lg mb-8"></div>
    <div class="max-w-7xl mx-auto">

        <!-- Navigation -->
        @unless (Request::is('result'))
        <div class="flex justify-between items-center mb-12">
            <nav class="flex justify-start space-x-8">
                <a href="/#"
                    class="{{ Request::is('/') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Beranda</a>
                <a href="/buku"
                    class="{{ Request::is('buku*') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Buku</a>
                <a href="/hadis"
                    class="{{ Request::is('hadis*') ? 'text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }} transition text-lg">Hadis</a>
            </nav>
            @unless (Request::is('/'))
            <div class="w-1/3">
                <input type="text" placeholder="search"
                    class="border border-green-600 w-full max-w-sm py-2 px-2 rounded focus:outline-none focus:ring-1 focus:ring-green-600">
            </div>
            @endunless
        </div>
        @endunless
    </div>
</div>