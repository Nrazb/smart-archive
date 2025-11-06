@extends('layouts.app')

@section('title', 'Input Arsip Surat')

@section('content')
<div class="w-full">
    <div class="flex items-center border-b">
        <h1 class="text-2xl font-semibold text-gray-800">Tambah Arsip Surat</h1>
    </div>
    <form action="{{ route('letters.store')}}" method="POST" enctype="multipart/form-data" class="mt-6 bg-white p-6 rounded-xl shadow-lg ">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Nomor Surat</label>
            <input type="text" name="nomor_surat" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Perihal</label>
            <input type="text" name="perihal" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">Kategori Surat</label>
            <select name="kategori" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" required>
                <option value="masuk">Masuk</option>
                <option value="keluar">Keluar</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium">File Surat (PDF)</label>
            <input type="file" name="file_path" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" accept="application/pdf">
        </div>

        <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg">
            Simpan Arsip Surat
        </button>
    </form>
</div>
@endsection
