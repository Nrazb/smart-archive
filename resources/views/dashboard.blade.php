@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <h1 class="text-xl font-semibold text-gray-800">Selamat Datang {{ Auth::user()->name }}!</h1>
    <br>
    <!-- Surat Masuk -->
    <div class="bg-blue-500 rounded-xl p-6 text-white shadow-md flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold">Surat Masuk</h2>
            <p class="text-sm opacity-90 mt-1">Telah disimpan</p>
        </div>
        <div class="flex items-center space-x-2 bg-white text-blue-600 px-3 py-1 rounded-lg">
            <span class="font-semibold">{{ $suratMasuk }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
    </div>

    <!-- Surat Keluar -->
    <div class="bg-blue-500 rounded-xl p-6 text-white shadow-md flex justify-between items-center">
        <div>
            <h2 class="text-xl font-semibold">Surat Keluar</h2>
            <p class="text-sm opacity-90 mt-1">Telah disimpan</p>
        </div>
        <div class="flex items-center space-x-2 bg-white text-blue-600 px-3 py-1 rounded-lg">
            <span class="font-semibold">{{ $suratKeluar }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
        </div>
    </div>
</div>
@endsection
