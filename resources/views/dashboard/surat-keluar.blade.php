@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
<div class="w-full">
    {{-- Header dan Tombol Aksi --}}
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between pb-4 border-b">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4 md:mb-0">Surat Keluar</h1>

        <div class="flex flex-wrap items-center space-x-3">
            {{-- Tombol Tambah --}}
            <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 flex items-center mb-2 md:mb-0">
                <i class="fas fa-plus-circle mr-2"></i> Add New Surat Masuk
            </a>
            
            {{-- Search Box --}}
            <form action="#" method="GET" class="relative">
                <input type="text" name="search" placeholder="Search" value="{{ request('search') }}"
                    class="py-2 pl-4 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 w-full md:w-auto">
                <button type="submit" class="absolute right-0 top-0 mt-2 mr-3 text-gray-500 hover:text-indigo-600">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    {{-- Tabel Data --}}
    <div class="mt-6 bg-white shadow-lg rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No Agenda</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Surat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tujuan Surat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nomor Surat</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Perihal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">File Surat</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    {{-- @foreach ($suratMasuk as $surat) --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2025-11-05</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PT. Maju Bersama</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">MB/A-001/VIII/21</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Penawaran Produk</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">surat_penawaran.pdf</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center space-x-1">
                            <a href="#" class="inline-flex items-center px-3 py-1 bg-green-500 text-white text-xs font-bold rounded hover:bg-green-600 transition">View</a>
                            <a href="#" class="inline-flex items-center px-3 py-1 bg-yellow-500 text-white text-xs font-bold rounded hover:bg-yellow-600 transition">Edit</a>
                            <button type="button" class="inline-flex items-center px-3 py-1 bg-red-600 text-white text-xs font-bold rounded hover:bg-red-700 transition">Delete</button>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
    
    {{-- Footer Tabel --}}
    <div class="flex items-center justify-between mt-4">
        <button class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 flex items-center">
            <i class="fas fa-file-export mr-2"></i> Export
        </button>
        
        <span class="text-sm text-gray-600">Records : 1 of 1</span>
    </div>

</div>
@endsection