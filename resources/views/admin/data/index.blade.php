@extends('admin.layouts.app')

@section('content')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ url()->previous() }}" class="text-green-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">Data</h2>
        </div>
        {{-- Massage --}}
        @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            <p>{{ session('success')}}</p>
        </div>
        @endif
        @if(session('info'))
        <div class="bg-yellow-500 text-white p-3 rounded mb-4">
            {{ session('info') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="p-3 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
            <p>{{ session('error')}}</p>
        </div>
        @endif
        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Buku Card -->
            <a href="{{ route('admin.dashboard.data', ['tipe' => 'buku']) }}">
                <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Buku</h3>
                            <p class="text-3xl font-bold text-blue-600">{{ $counts['buku'] }}</p>
                        </div>
                        <div class="text-blue-600 text-4xl">
                            <i class="fas fa-book"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-sm text-gray-500">Klik untuk melihat detail</span>
                    </div>
                </div>
            </a>

            <!-- Kitab Card -->
            <a href="{{ route('admin.dashboard.data', ['tipe' => 'kitab']) }}">
                <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Kitab</h3>
                            <p class="text-3xl font-bold text-green-600">{{ $counts['kitab'] }}</p>
                        </div>
                        <div class="text-green-600 text-4xl">
                            <i class="fas fa-scroll"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-sm text-gray-500">Klik untuk melihat detail</span>
                    </div>
                </div>
            </a>

            <!-- Perawi Card -->
            <a href="{{ route('admin.dashboard.data', ['tipe' => 'perawi']) }}">
                <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Perawi</h3>
                            <p class="text-3xl font-bold text-purple-600">{{ $counts['perawi'] }}</p>
                        </div>
                        <div class="text-purple-600 text-4xl">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-sm text-gray-500">Klik untuk melihat detail</span>
                    </div>
                </div>
            </a>

            <!-- Hadist Card -->
            <a href="{{ route('admin.dashboard.data', ['tipe' => 'hadist']) }}">
                <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer hover:shadow-lg transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Hadist</h3>
                            <p class="text-3xl font-bold text-red-600">{{ $counts['hadist'] }}</p>
                        </div>
                        <div class="text-red-600 text-4xl">
                            <i class="fas fa-quote-left"></i>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-sm text-gray-500">Klik untuk melihat detail</span>
                    </div>
                </div>
            </a>
        </div>

        @include('admin.data.buku.index')
        @include('admin.data.kitab.index')
        @include('admin.data.perawi.index')
        @include('admin.data.hadist.index')
    </main>
</div>
@endsection