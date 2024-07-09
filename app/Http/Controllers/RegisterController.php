<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRegister;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function registerIndex()
    {
        return view('login.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            // Opsional
            'nama_lengkap' => 'nullable|string',
            'email' => 'nullable|string|email|unique:newusers,email',
            'tgl_lahir' => 'nullable|date',
        ]);

        $user = new UserRegister();
        $user->username = $request->username;
        $user->nama_lengkap = $request->nama_lengkap; // null jika tidak diisi
        $user->email = $request->email; // null jika tidak diisi
        $user->password = Hash::make($request->password);
        $user->tgl_lahir = $request->tgl_lahir; // null jika tidak diisi
        $user->save();
        
        return redirect()->route('loginIndex')->with('success', 'Account created successfully.');
    }
}
