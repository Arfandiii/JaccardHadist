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
            <h2 class="font-bold mb-2 text-center text-3xl">Detail Data Hadist</h2>
        </div>
        <div class="p-6 my-10 mx-auto bg-white rounded-lg shadow-md">
            <!-- Card -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl shadow-lg p-8">
                <div class="mb-6">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Detail Hadist</h1>
                    <div class="h-1 w-16 bg-green-500 rounded"></div>
                </div>

                <!-- Detail Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow border border-gray-200">
                        <tbody>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600 w-1/4">ID Hadist</th>
                                <td class="px-6 py-4 text-gray-900 font-semibold">{{ $hadist->id }}</td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600">Kitab</th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $hadist->kitab->nama_kitab ?? '—' }}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600">Perawi</th>
                                <td class="px-6 py-4 text-gray-900">
                                    {{ $hadist->perawi->nama_perawi ?? '—' }}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <th class="px-6 py-4 text-left text-gray-600">No Hadist</th>
                                <td class="px-6 py-4 text-gray-900 font-semibold">{{ $hadist->no_hadist }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-left text-gray-600 align-top">Isi Hadist</th>
                                <td class="px-6 py-4 text-gray-900 whitespace-pre-line">{{ $hadist->isi_hadist }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex flex-wrap justify-end gap-3">
                    <a href="{{ route('admin.hadist.edit', $hadist->id) }}"
                        class="inline-flex items-center px-5 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a4 4 0 01-1.414.94l-4.243 1.415 1.415-4.243a4 4 0 01.94-1.414z" />
                        </svg>
                        Edit
                    </a>
                    <form action="{{ route('admin.hadist.destroy', $hadist->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus hadist ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-5 py-2 bg-red-600 text-white rounded-lg shadow cursor-pointer hover:bg-red-700 transition font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection