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
            <h2 class="font-bold mb-2 text-center text-3xl">Tambah Data Hadist</h2>
        </div>
        <div class="p-6 mb-10 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex flex-wrap w-full mx-auto">
                <form action="{{ route('admin.hadist.store') }}" method="POST"
                    class="flex flex-col gap-4 w-full my-5 mx-auto">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="mb-2">
                            <label for="no_hadist" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                Nomor Hadist
                            </label>
                            <input type="number" name="no_hadist" id="no_hadist" required
                                class="bg-gray-50 focus:outline-none focus:ring-1 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                placeholder="Masukkan Nomor Hadist" value="{{ old('no_hadist') }}">
                            @error('no_hadist')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="kitab_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                Kitab
                            </label>
                            <select name="kitab_id" id="kitab_id" required
                                class="bg-gray-50 focus:outline-none focus:ring-1 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="">-- Pilih Kitab --</option>
                                @foreach($DataKitab as $kitab)
                                <option value="{{ $kitab->id }}" {{ old('kitab_id')==$kitab->id ? 'selected' : '' }}>
                                    {{ $kitab->nama_kitab }}
                                </option>
                                @endforeach
                            </select>
                            @error('kitab_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="perawi_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                Perawi
                            </label>
                            <select name="perawi_id" id="perawi_id" required
                                class="bg-gray-50 focus:outline-none focus:ring-1 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                                <option value="">-- Pilih Perawi --</option>
                                @foreach($DataPerawi as $perawi)
                                <option value="{{ $perawi->id }}" {{ old('perawi_id')==$perawi->id ? 'selected' : '' }}>
                                    {{ $perawi->nama_perawi }}
                                </option>
                                @endforeach
                            </select>
                            @error('perawi_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="isi_hadist" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                            Isi Hadist
                        </label>
                        <textarea name="isi_hadist" id="isi_hadist" rows="9" required
                            class="bg-gray-50 focus:outline-none focus:ring-1 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                            placeholder="Masukkan Isi Hadist">{{ old('isi_hadist') }}</textarea>
                        @error('isi_hadist')
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