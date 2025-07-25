@extends('admin.layouts.app')

@section('content')
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4">
    {{-- Massage --}}
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif
    @if(session('info'))
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('info') }}</span>
    </div>
    @endif
    @if (session()->has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
    @endif
    <div class="p-6 mx-auto bg-white rounded-lg shadow-md my-10">
        <div class="mb-6 flex items-center text-sm text-gray-900 space-x-2">
            <a href="{{ url()->previous() }}" class="text-blue-600 hover:underline font-medium">&larr;
                Kembali</a>
            <span>/</span>
            <h2 class="font-bold mb-2 text-center text-3xl">Profile</h2>
        </div>
        <div class="flex flex-wrap w-full my-5 -mx-2 flex-col">
            <div class="w-full md:w-2/3 lg:w-1/2 p-2 mx-auto">
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-green-200">
                    <!-- Header -->
                    <div class="flex items-center mb-8">
                        <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-green-200 shadow-sm mr-6">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=008236&color=fff&size=128"
                                alt="Profile Picture" class="object-cover w-full h-full">
                        </div>
                        <div>
                            <h1 class="text-2xl md:text-3xl font-bold text-green-700 mb-1">{{ $user->name }}</h1>
                            <div class="flex items-center gap-2">
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm capitalize">
                                    Admin
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Info Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-700 text-sm md:text-base">
                        <div>
                            <p class="font-semibold">Email:</p>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Username:</p>
                            <p>{{ $user->username ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Tanggal Bergabung:</p>
                            <p>{{ $user->created_at->translatedFormat('d F Y') }}</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ route('admin.profile.edit', $user->id) }}"
                            class="inline-flex items-center bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition shadow-sm">
                            Edit Profil
                        </a>
                        <a href="{{ route('admin.dashboard') }}"
                            class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                            Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>

            {{-- Form Ubah Password --}}
            <div class="w-full md:w-1/2 px-2 mx-auto mt-10">
                <div class="bg-white p-8 rounded-2xl shadow-xl border border-green-200">
                    <h3 class="text-2xl font-bold text-green-700 mb-6">Ubah Password</h3>
                    <form action="{{ route('admin.dashboard.password.update') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Password Lama --}}
                        <div class="flex flex-col gap-1">
                            <label for="current_password" class="text-sm font-semibold text-gray-700 mb-1">Password
                                Lama</label>
                            <input type="password" name="current_password" id="current_password" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition"
                                placeholder="Masukkan password lama">
                        </div>

                        {{-- Password Baru --}}
                        <div class="flex flex-col gap-1">
                            <label for="new_password" class="text-sm font-semibold text-gray-700 mb-1">Password
                                Baru</label>
                            <input type="password" name="new_password" id="new_password" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition"
                                placeholder="Masukkan password baru">
                        </div>

                        {{-- Konfirmasi Password --}}
                        <div class="flex flex-col gap-1">
                            <label for="new_password_confirmation"
                                class="text-sm font-semibold text-gray-700 mb-1">Konfirmasi Password
                                Baru</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 transition"
                                placeholder="Ulangi password baru">
                        </div>

                        {{-- Tombol --}}
                        <div class="pt-4 text-end">
                            <button type="submit"
                                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition cursor-pointer">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection