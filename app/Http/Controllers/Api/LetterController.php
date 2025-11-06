<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Letter;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\LetterResource;

class LetterController extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->query('kategori'); // masuk/keluar
        $letters = Letter::where('user_id', Auth::id())
                       ->when($kategori, fn($q) => $q->where('kategori', $kategori))
                       ->get();

        return LetterResource::collection($letters);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|string',
            'perihal' => 'required|string',
            'kategori' => 'required|in:masuk,keluar',
            'file_path' => 'nullable|string',
        ]);

        $letter = Letter::create([
            'nomor_surat' => $request->nomor_surat,
            'perihal' => $request->perihal,
            'kategori' => $request->kategori,
            'file_path' => $request->file_path,
            'user_id' => Auth::id(),
        ]);

        return new LetterResource($letter);
    }

    public function update(Request $request, Letter $letter)
    {
        $this->authorize('update', $letter);

        $request->validate([
            'nomor_surat' => 'required|string',
            'perihal' => 'required|string',
            'kategori' => 'required|in:masuk,keluar',
            'file_path' => 'nullable|string',
        ]);

        $letter->update($request->only('nomor_surat', 'perihal', 'kategori', 'file_path'));

        return new LetterResource($letter);
    }

    public function destroy(Letter $letter)
    {
        $this->authorize('delete', $letter);
        $letter->delete();

        return response()->json(['message' => 'Surat berhasil dihapus']);
    }
}
