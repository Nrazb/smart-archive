@extends('layouts.app')

@section('title', 'Edit Arsip Surat')

@section('content')
<div class="w-full">
    <div class="flex items-center justify-between border-b">
        <h1 class="text-2xl font-semibold text-gray-800">Edit Arsip Surat</h1>
        <a href="{{ route('letters.index') }}"
           class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-lg transition">
            ← Kembali
        </a>
    </div>

    <form action="{{ route('letters.update', $letter->id) }}" method="POST" enctype="multipart/form-data" class="mt-6 bg-white p-6 rounded-xl shadow-lg">
        @csrf
        @method('PUT')

        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Nomor Surat</label>
            <input type="text" name="nomor_surat" value="{{ old('nomor_surat', $letter->nomor_surat) }}"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Perihal</label>
            <input type="text" name="perihal" value="{{ old('perihal', $letter->perihal) }}"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Kategori Surat</label>
            <select name="kategori" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" required>
                <option value="masuk" {{ $letter->kategori == 'masuk' ? 'selected' : '' }}>Masuk</option>
                <option value="keluar" {{ $letter->kategori == 'keluar' ? 'selected' : '' }}>Keluar</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">File Surat (PDF)</label>
            @if($letter->file_path)
                <p class="text-sm text-gray-600 mb-2">File saat ini: <a href="{{ asset('storage/'.$letter->file_path) }}" target="_blank" class="text-blue-500 underline">Lihat File</a></p>
            @endif
            <input type="file" name="file_path" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" accept="application/pdf">
        </div>

        <button type="submit"
            class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg">
            Update Arsip Surat
        </button>
    </form>
</div>
@endsection
