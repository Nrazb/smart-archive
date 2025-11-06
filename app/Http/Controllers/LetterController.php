<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function index()
    {
        $letters = Letter::latest()->paginate(10);
        return view('letters.index', compact('letters'));
    }

    public function create()
    {
        return view('letters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'type' => 'required|in:masuk,keluar',
            'date' => 'required|date',
        ]);

        Letter::create($request->all());

        return redirect()->route('letters.index')->with('success', 'Surat berhasil dibuat.');
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
            'title' => 'required|string|max:255',
            'content' => 'required',
            'type' => 'required|in:masuk,keluar',
            'date' => 'required|date',
        ]);

        $letter->update($request->all());

        return redirect()->route('letters.index')->with('success', 'Surat berhasil diupdate.');
    }

    public function destroy(Letter $letter)
    {
        $letter->delete();
        return redirect()->route('letters.index')->with('success', 'Surat berhasil dihapus.');
    }
}
