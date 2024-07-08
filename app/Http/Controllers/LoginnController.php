<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginnController extends Controller
{
    public function loginIndex()
    {
        return view('login.index1');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, simpan data pengguna dalam sesi
            $user = Auth::user();
            session(['user' => $user]);

            Log::info('Login berhasil', ['user' => $user]);

            return redirect()->route('beranda')->with('success', 'Login berhasil');
        }

        Log::warning('Login gagal', ['credentials' => $credentials]);

        return back()->with('error', 'Username atau Password yang Anda masukkan salah. Silahkan ulangi!');
        
    }
}
