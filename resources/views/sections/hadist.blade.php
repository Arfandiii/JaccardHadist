@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mb-12">
    <!-- Hadis content -->
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar Buku</h2>
    <div class="mb-8">
        {{ $hadist->links() }}
    </div>
    <div class="space-y-4">
        @foreach ($hadist as $hadist)
        <div
            class="border border-green-500 shadow-lg rounded-xl bg-gradient-to-br from-green-50 to-white p-6 transition-transform hover:scale-103 hover:shadow-2xl duration-200">
            <h3 class="text-xl font-semibold text-green-700 mb-3 leading-snug">{{ $hadist->isi_hadist }}</h3>
            <div class="flex flex-wrap gap-4 text-sm mt-2">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-medium">
                    Kitab: {{ $hadist->kitab->nama_kitab }}
                </span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full font-medium">
                    Perawi: {{ $hadist->perawi->nama_perawi }}
                </span>
                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full font-medium">
                    No: {{ $hadist->no_hadist }}
                </span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection