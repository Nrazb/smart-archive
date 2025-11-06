<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{

    public function index()
    {
        $letters = Letter::latest()->paginate(10);
        return view('letters.index', compact('letters'));
    }

    public function create()
    {
        // $letters = Letter::all();
        return view('letters.create', compact('letters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:50',
            'perihal' => 'required|string|max:255',
            'kategori' => 'required|in:masuk,keluar',
            'file_path' => 'nullable|mimes:pdf|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('letters', 'public');
        }

        Letter::create([
            'nomor_surat' => $request->nomor_surat,
            'perihal' => $request->perihal,
            'kategori' => $request->kategori,
            'file_path' => $filePath,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('letters.index')->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show(Letter $letter)
    {
        return view('letters.show', compact('letter'));
    }

    public function edit(Letter $letter)
    {
        return view('letters.edit', compact('letter'));
    }

    public function update(Request $request, Letter $letter)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:50',
            'perihal' => 'required|string|max:255',
            'kategori' => 'required|in:masuk,keluar',
            'file_path' => 'nullable|mimes:pdf|max:2048',
        ]);

        $filePath = $letter->file_path;

        // Jika ada file baru, hapus file lama dan simpan file baru
        if ($request->hasFile('file_path')) {
            if ($filePath) {
                Storage::disk('public')->delete($filePath);
            }
            $filePath = $request->file('file_path')->store('letters', 'public');
        }

        $letter->update([
            'nomor_surat' => $request->nomor_surat,
            'perihal' => $request->perihal,
            'kategori' => $request->kategori,
            'file_path' => $filePath,
        ]);

        return redirect()->route('letters.index')->with('success', 'Surat berhasil diupdate.');
    }

    public function destroy(Letter $letter)
    {
        if ($letter->file_path) {
            Storage::disk('public')->delete($letter->file_path);
        }

        $letter->delete();

        return redirect()->route('letters.index')->with('success', 'Surat berhasil dihapus.');
    }
}
