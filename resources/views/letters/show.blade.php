@extends('layouts.app')

@section('title', 'Detail Arsip Surat')

@section('content')

<div class="w-full">
    {{-- Header --}}
    <div class="flex items-center justify-between pb-4 border-b">
        <h1 class="text-3xl font-semibold text-gray-800">Detail Arsip Surat</h1>
        <a href="{{ route('letters.index') }}"
           class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-lg transition">
            ← Kembali
        </a>
    </div>

    {{-- Detail Surat --}}
    <div class="mt-6 bg-white shadow-lg rounded-xl p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-sm text-gray-500">Nomor Surat</p>
                <p class="text-lg font-semibold text-gray-800">{{ $letter->nomor_surat ?? '-' }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Kategori</p>
                <p class="text-lg font-semibold text-gray-800">{{ ucfirst($letter->kategori) ?? '-' }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Perihal</p>
                <p class="text-lg font-semibold text-gray-800">{{ $letter->perihal ?? '-' }}</p>
            </div>

            <div class="md:col-span-2">
                <p class="text-sm text-gray-500">File Surat</p>
                @if($letter->file_path)
                    <a href="{{ asset('storage/' . $letter->file_path) }}" target="_blank"
                       class="text-indigo-600 hover:underline flex items-center mt-1">
                        <i class="fas fa-file-pdf mr-2"></i> {{ basename($letter->file_path) }}
                    </a>
                @else
                    <p class="text-gray-600 mt-1">Tidak ada file</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
