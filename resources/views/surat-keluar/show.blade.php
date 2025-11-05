@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')

<div class="w-full">
    {{-- Header --}}
    <div class="flex items-center justify-between pb-4 border-b">
        <h1 class="text-3xl font-semibold text-gray-800">Detail Surat Keluar</h1>
        <a href="{{ route('surat-keluar') }}"
        class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-lg transition">
        ← Kembali
        </a>
    </div>

    {{-- Detail Surat --}}
    <div class="mt-6 bg-white shadow-lg rounded-xl p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <p class="text-sm text-gray-500">Nomor Surat</p>
                <p class="text-lg font-semibold text-gray-800">{{ $surat->nomor_surat ?? 'SK-001/IX/2025' }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Tanggal Surat</p>
                <p class="text-lg font-semibold text-gray-800">{{ $surat->tanggal_surat ?? '2025-11-05' }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Tujuan Surat</p>
                <p class="text-lg font-semibold text-gray-800">{{ $surat->tujuan_surat ?? 'Kepala Dinas Pendidikan' }}</p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Perihal</p>
                <p class="text-lg font-semibold text-gray-800">{{ $surat->perihal ?? 'Permohonan Kerjasama' }}</p>
            </div>

            <div class="md:col-span-2">
                <p class="text-sm text-gray-500">File Surat</p>
                @if(isset($surat->file_surat))
                    <a href="{{ asset('storage/surat-keluar/' . $surat->file_surat) }}" target="_blank"
                    class="text-indigo-600 hover:underline flex items-center mt-1">
                        <i class="fas fa-file-pdf mr-2"></i> {{ $surat->file_surat }}
                    </a>
                @else
                    <p class="text-gray-600 mt-1">surat_permohonan.pdf</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection