<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRegisterr;

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

        // Debugging tambahan
        Log::info('Mencoba login', ['credentials' => ['username' => $credentials['username'], 'password' => '***']]);

        // Cek apakah pengguna ada di database
        $user = UserRegisterr::where('username', $credentials['username'])->first();
        if (!$user) {
            Log::warning('Pengguna tidak ditemukan', ['username' => $credentials['username']]);
            return back()->with('error', 'Username atau Password yang Anda masukkan salah. Silahkan ulangi!');
        }

        // Debugging hash password
        Log::info('Hash password di database', ['hash' => $user->password]);

        // Cek password
        if (!Hash::check($credentials['password'], $user->password)) {
            Log::warning('Password salah', ['username' => $credentials['username']]);
            return back()->with('error', 'Username atau Password yang Anda masukkan salah. Silahkan ulangi!');
        }

        // Autentikasi pengguna
        if (Auth::attempt($credentials)) {
            Log::info('Login berhasil', ['user' => Auth::user()]);
            return redirect()->route('beranda')->with('success', 'Login berhasil');
        } else {
            Log::warning('Login gagal', ['credentials' => ['username' => $credentials['username'], 'password' => '***']]);
            return back()->with('error', 'Username atau Password yang Anda masukkan salah. Silahkan ulangi!');
        }
    }
}
