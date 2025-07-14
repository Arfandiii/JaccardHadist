@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mb-12">
    @if (session('error'))
    <div class="mb-4 text-red-600 bg-red-100 border border-red-200 rounded-lg px-4 py-3">
        {{ session('error') }}
    </div>
    @endif
    <!-- Hadis content -->
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Daftar Hadist</h2>
    <div class="mb-8">
        {{ $results->links() }}
    </div>
    @if(isset($metrics))
    <div class="mt-6 bg-white shadow rounded-lg p-4 mb-8">
        <h3 class="text-lg font-bold mb-2">Evaluasi Pencarian</h3>
        <div class="grid grid-cols-2 gap-4 text-sm">
            <div>
                <p>✅ TP: <strong>{{ $metrics['tp'] }}</strong></p>
                <p>❌ FP: <strong>{{ $metrics['fp'] }}</strong></p>
                <p>🔎 FN: <strong>{{ $metrics['fn'] }}</strong></p>
                <p>✅ TN: <strong>{{ $metrics['tn'] }}</strong></p>
            </div>
            <div>
                <p>📊 Precision: <strong>{{ $metrics['precision'] }}</strong></p>
                <p>📈 Recall: <strong>{{ $metrics['recall'] }}</strong></p>
                <p>📈 F1-Score: <strong>{{ $metrics['f1_score'] }}</strong></p>
            </div>
        </div>
        {{-- Pesan khusus jika tidak ada TP --}}
        @if($metrics['tp'] === 0)
        <div class="mt-4 p-3 bg-yellow-100 text-yellow-800 rounded">
            ⚠️ Tidak ada dokumen relevan yang ditemukan untuk query
            <strong>"{{ $query }}"</strong>.
            Masukan query yang lebih spesifik.
        </div>
        @endif
    </div>
    @endif
    <div class="space-y-4">
        @foreach ($results as $hadist)
        <div
            class="border border-green-500 shadow-lg rounded-xl bg-gradient-to-br from-green-50 to-white p-6 transition-transform hover:scale-103 hover:shadow-2xl duration-200">
            <h3 class="text-xl font-semibold text-green-700 mb-3 leading-snug">{{ $hadist->isi_hadist }}</h3>
            <div class="flex flex-wrap gap-4 text-sm mt-2">
                @if (isset($hadist->similarity))
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-medium">
                    Similarity: {{ number_format($hadist->similarity * 100)}}%
                </span>
                @endif
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