<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\UserRegisterr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('login.register1');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:newusers',
            'email' => 'required|email|unique:newusers',
            'password' => 'required|min:6|confirmed',
        ]);

        UserRegisterr::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    public function showLoginForm()
    {
        return view('login.index1');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/beranda');
        }

        return back()->withErrors([
            'username' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ]);
    }
}