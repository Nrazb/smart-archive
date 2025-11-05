@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')
<div class="w-full">
    {{-- Header --}}
    <div class="flex items-center justify-between pb-4 border-b">
        <h1 class="text-2xl font-semibold text-gray-800">Edit Surat Masuk</h1>
        <a href="{{ route('surat-masuk') }}"
        class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-lg transition">
            ← Kembali
        </a>
    </div>

    {{-- Form --}}
    <form action="{{ route('edit-surat-masuk') }}" method="POST" enctype="multipart/form-data"
        class="mt-6 bg-white p-6 rounded-xl shadow-lg space-y-5">
        @csrf
        @method('PUT')

        {{-- No Agenda --}}
        <div>
            <label class="block text-gray-700 font-medium">No Agenda</label>
            <input type="text" name="no_agenda" value="20"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        {{-- Tanggal Diterima --}}
        <div>
            <label class="block text-gray-700 font-medium">Tanggal Diterima</label>
            <input type="date" name="tanggal_diterima" value="2021-08-10"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        {{-- Pengirim --}}
        <div>
            <label class="block text-gray-700 font-medium">Pengirim</label>
            <input type="text" name="pengirim" value="PT. Maju Bersama"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        {{-- Nomor Surat --}}
        <div>
            <label class="block text-gray-700 font-medium">Nomor Surat</label>
            <input type="text" name="nomor_surat" value="MB/A-001/VIII/21"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        {{-- Perihal --}}
        <div>
            <label class="block text-gray-700 font-medium">Perihal</label>
            <input type="text" name="perihal" value="Penawaran Produk"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        {{-- File Surat --}}
        <div>
            <label class="block text-gray-700 font-medium">File Surat (PDF)</label>
            <input type="file" name="file_surat"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        {{-- Tombol Update --}}
        <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg">
            Update
        </button>
    </form>
</div>
@endsection
