<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use Illuminate\Http\Request;

class LetterApiController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->api_user;

        $letters = Letter::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'message' => 'Daftar surat arsip',
            'data' => $letters
        ]);
    }

    public function show(Request $request, $id)
    {
        $user = $request->api_user;

        $letter = Letter::where('user_id', $user->id)
            ->where('id', $id)
            ->first();

        if (!$letter) {
            return response()->json(['message' => 'Surat tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Detail surat',
            'data' => $letter
        ]);
    }
}
