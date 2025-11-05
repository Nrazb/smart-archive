@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')
<div class="w-full">
    <div class="flex items-center justify-between pb-4 border-b">
        <h1 class="text-2xl font-semibold text-gray-800">Tambah Surat Keluar</h1>
        <a href="{{ route('surat-keluar') }}"
        class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-lg transition">
        ← Kembali
        </a>
    </div>
    <form action="#" method="POST" enctype="multipart/form-data" class="mt-6 bg-white p-6 rounded-xl shadow-lg space-y-5">
        <div>
            <label class="block text-gray-700 font-medium">Nomor Surat</label>
            <input type="text" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Tanggal Surat</label>
            <input type="date" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Tujuan Surat</label>
            <input type="text" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Perihal</label>
            <input type="text" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">File Surat (PDF)</label>
            <input type="file" class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg">
            Simpan
        </button>
    </form>
</div>
@endsection
