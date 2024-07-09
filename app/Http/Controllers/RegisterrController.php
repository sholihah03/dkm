<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserRegister1;
use App\Models\UserRegisterr;
use Illuminate\Support\Facades\Log;

class RegisterrController extends Controller
{
    public function registerIndex()
    {
        return view('login.register1');
    }

    public function registerPost(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:newusers',
        'password' => 'required|string|min:6|confirmed', // Validate password confirmation
    ]);

    $user = new UserRegisterr();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    Log::info('User registered successfully', ['username' => $user->username]);

    return redirect()->route('loginIndex')->with('success', 'Registrasi berhasil!');
}

}
