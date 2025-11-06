@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
<div class="w-full">
    {{-- Header dan Tombol Aksi --}}
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between pb-4 border-b gap-4">
        <h1 class="text-3xl font-semibold text-gray-800">Surat Masuk</h1>

        <div class="flex flex-col sm:flex-row sm:flex-wrap items-start sm:items-center gap-3 w-full md:w-auto">
            {{-- Tombol Tambah --}}
            <a href="{{ route('letters.create') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 flex items-center justify-center w-full sm:w-auto">
                <i class="fas fa-plus-circle mr-2"></i> Add New
            </a>

            {{-- Search Box --}}
            <form action="#" method="GET" class="relative w-full sm:w-64">
                <input type="text" name="search" placeholder="Search" value="{{ request('search') }}"
                    class="py-2 pl-4 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full">
                <button type="submit"
                    class="absolute right-0 top-0 mt-2 mr-3 text-gray-500 hover:text-indigo-600">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    {{-- Tabel Data --}}
    <div class="mt-6 bg-white shadow-lg rounded-xl p-0">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse divide-y divide-gray-200 min-w-[600px]">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-2 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No Surat</th>
                        <th class="px-2 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Perihal</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                        <th class="px-2 py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    {{-- @foreach ($suratMasuk as $surat) --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 truncate max-w-[150px]">MB/A-001/VIII/21</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 truncate max-w-[150px]">Penawaran Produk</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 truncate max-w-[150px]">surat_penawaran.pdf</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center">
                            <div class="flex flex-wrap justify-center gap-2">
                                <a href="#"
                                    class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded hover:bg-green-600 transition">
                                    View
                                </a>
                                <a href="#"
                                    class="px-3 py-1 bg-yellow-500 text-white text-xs font-bold rounded hover:bg-yellow-600 transition">
                                    Edit
                                </a>
                                <form action="#" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus surat ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded hover:bg-red-700 transition">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

    {{-- Footer Tabel --}}
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mt-4 gap-3">
        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 flex items-center justify-center w-full sm:w-auto">
            <i class="fas fa-file-export mr-2"></i> Export
        </button>
        <span class="text-sm text-gray-600 text-center sm:text-right w-full sm:w-auto">Records : 1 of 1</span>
    </div>
</div>
@endsection
