@extends('layouts.app')

@section('title', 'Arsip Surat')

@section('content')
<div class="w-full">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between pb-4 border-b gap-4">
        <h1 class="text-3xl font-semibold text-gray-800">Daftar Arsip Surat Surat</h1>

        <div class="flex flex-col sm:flex-row sm:flex-wrap items-start sm:items-center gap-3 w-full md:w-auto">
            <a href="{{ route('letters.create') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 flex items-center justify-center w-full sm:w-auto">
                Tambah Arsip Surat
            </a>
        </div>
    </div>


    <div class="mt-6 bg-white shadow-lg rounded-xl p-0">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse divide-y divide-gray-200 min-w-[600px]">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-center text-base font-bold text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-2 py-4 text-center text-base font-bold text-gray-500 uppercase tracking-wider">No Surat</th>
                        <th class="px-2 py-4 text-center text-base font-bold text-gray-500 uppercase tracking-wider">Perihal</th>
                        <th class="px-6 py-4 text-center text-base font-bold text-gray-500 uppercase tracking-wider">Kategori</th>
                        <th class="px-2 py-2 text-center text-base font-bold text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($letters as $data)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-gray-500">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-gray-500 truncate max-w-[150px]">{{$data->nomor_surat}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-gray-500 truncate max-w-[150px]">{{$data->perihal}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-gray-500 truncate max-w-[150px]">{{$data->kategori}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base font-medium text-center">
                            <div class="flex flex-wrap justify-center gap-2">
                                <a href="{{ route('letters.show', $data->id) }}"
                                    class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded hover:bg-green-600 transition">
                                    View
                                </a>
                                <a href="{{ route('letters.edit', $data->id) }}"
                                    class="px-3 py-1 bg-yellow-500 text-white text-xs font-bold rounded hover:bg-yellow-600 transition">
                                    Edit
                                </a>
                                <form action="{{ route('letters.destroy', $data->id) }}" method="POST"
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
