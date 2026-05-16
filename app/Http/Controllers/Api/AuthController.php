<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;           // Penting untuk User::where
use Illuminate\Support\Facades\Auth; // Penting untuk Auth::attempt
use Illuminate\Support\Facades\Log;  // Penting untuk Log::info

class AuthController extends Controller
{
    /**
     * Handle the incoming request to get an API token.
     */

public function getToken(Request $request)
{
    try {
        // Validasi input
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial
        if (!Auth::attempt($data)) {
            Log::info('[Auth - API] Percobaan login gagal: ' . $request->email);

            return response()->json([
                'message' => 'Email atau password salah',
            ], 401);
        }

        // Ambil data user
        $user = User::where('email', $request->email)->firstOrFail();
        
        // Hapus token lama (Opsional: agar satu user hanya punya satu token aktif)
        // $user->tokens()->delete();

        // Buat token baru
        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ]
        ], 200);

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            'message' => 'Validasi gagal',
            'errors' => $e->errors()
        ], 422);
    } catch (\Throwable $e) {
        Log::error('Error saat login API: ' . $e->getMessage());

        return response()->json([
            'message' => 'Terjadi kesalahan pada server',
        ], 500);
    }
}

}


