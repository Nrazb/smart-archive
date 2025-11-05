@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
<div class="w-full">
    <div class="flex items-center justify-between pb-4 border-b">
        <h1 class="text-2xl font-semibold text-gray-800">Tambah Surat Masuk</h1>
        <a href="{{ route('surat-masuk') }}"
        class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-lg transition">
        ← Kembali
        </a>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data"
        class="mt-6 bg-white p-6 rounded-xl shadow-lg space-y-5">
        @csrf
        
        <div>
            <label class="block text-gray-700 font-medium">Nomor Agenda</label>
            <input type="text" name="no_agenda"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" placeholder="Masukkan nomor agenda">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Tanggal Diterima</label>
            <input type="date" name="tanggal_diterima"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Pengirim</label>
            <input type="text" name="pengirim"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" placeholder="Masukkan nama pengirim">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Nomor Surat</label>
            <input type="text" name="nomor_surat"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" placeholder="Masukkan nomor surat">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Perihal</label>
            <input type="text" name="perihal"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200" placeholder="Masukkan perihal surat">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">File Surat (PDF)</label>
            <input type="file" name="file_surat"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
        </div>

        <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg">
            Simpan
        </button>
    </form>
</div>
@endsection
