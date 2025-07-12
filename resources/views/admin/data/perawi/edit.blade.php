@extends('admin.layouts.app')

@section('content')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ route('admin.dashboard.data') }}" class="text-green-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">Ubah Data Perawi</h2>
        </div>
        <div class="p-6 mb-10 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex flex-wrap w-full mx-auto">
                <form action="{{ route('admin.perawi.update', $perawi->id) }}" method="POST"
                    class="flex flex-col gap-4 w-full my-5 mx-auto">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="nama_perawi" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                            Nama Perawi
                        </label>
                        <input type="text" name="nama_perawi" id="nama_perawi" required
                            class="bg-gray-50 focus:outline-none focus:ring-1 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            placeholder="Masukkan Nama Perawi" value="{{ old('nama_perawi', $perawi->nama_perawi) }}">
                        @error('nama_perawi')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-500 cursor-pointer">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection