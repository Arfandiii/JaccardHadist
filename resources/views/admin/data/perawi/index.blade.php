@if(isset($data) && $tipe === 'perawi')
<div id="perawi-table" class="mt-8 bg-white shadow-md rounded-lg p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-2xl font-bold text-gray-800">Data Perawi</h3>
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.perawi.create') }}"
                class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">
                <i class="fas fa-plus mr-2"></i> Tambah Perawi
            </a>
            <!-- Tombol X -->
            <button onclick="document.getElementById('perawi-table').classList.add('hidden')" title="Tutup Tabel"
                class="cursor-pointer w-8 h-8 rounded-full text-red-500 hover:text-white hover:bg-red-500 transition duration-200 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-full h-full ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
        </div>
    </div>
    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full table-auto text-left">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left py-5 px-6 font-semibold text-gray-600">ID</th>
                    <th class="text-left py-5 px-6 font-semibold text-gray-600">Nama Perawi</th>
                    <th class="py-5 px-6 font-semibold text-gray-600 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $perawi)
                <tr class="hover:bg-gray-100 transition">
                    <td class="py-5 px-6">{{ $perawi->id }}</td>
                    <td class="py-5 px-6">{{ $perawi->nama_perawi ?? '-' }}</td>
                    <td class="py-5 px-6">
                        <div class="flex space-x-2 justify-center">
                            <!-- Edit Button -->
                            <div class="relative before:content-[attr(data-tip)] before:absolute before:px-2 before:py-1 before:left-1/2 before:-top-3 before:w-max before:max-w-xs before:-translate-x-1/2 before:-translate-y-full before:bg-gray-700 before:text-white before:rounded-md before:opacity-0 before:transition-all after:absolute after:left-1/2 after:-top-3 after:h-0 after:w-0 after:-translate-x-1/2 after:border-8 after:border-t-gray-700 after:border-l-transparent after:border-b-transparent after:border-r-transparent after:opacity-0 after:transition-all hover:before:opacity-100 hover:after:opacity-100"
                                data-tip="Edit Perawi">
                                <a href="{{ route('admin.perawi.edit', $perawi->id) }}" class=" flex
                                                        items-center justify-center w-8 h-8 text-white
                                                        transition-colors duration-150 rounded-full bg-green-600
                                                        hover:bg-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 fill-current">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                        <path
                                            d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                </a>
                            </div>
                            <form action="{{ route('admin.perawi.destroy', $perawi->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <div class="relative before:content-[attr(data-tip)] before:absolute before:px-2 before:py-1 before:left-1/2 before:-top-3 before:w-max before:max-w-xs before:-translate-x-1/2 before:-translate-y-full before:bg-gray-700 before:text-white before:rounded-md before:opacity-0 before:transition-all after:absolute after:left-1/2 after:-top-3 after:h-0 after:w-0 after:-translate-x-1/2 after:border-8 after:border-t-gray-700 after:border-l-transparent after:border-b-transparent after:border-r-transparent after:opacity-0 after:transition-all hover:before:opacity-100 hover:after:opacity-100"
                                    data-tip="Delete Perawi">
                                    <button type="submit"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data perawi ini?')"
                                        class="cursor-pointer flex items-center justify-center w-8 h-8 text-white transition-colors duration-150 rounded-full bg-red-600 hover:bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-5 fill-current">
                                            <path fill-rule="evenodd"
                                                d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-4 py-6 text-center text-gray-500">Tidak ada data perawi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $data->appends(['tipe' => $tipe])->links() }}
    </div>
</div>
@endif