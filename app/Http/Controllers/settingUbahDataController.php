<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegisterr;
use Illuminate\Support\Facades\Auth;

class settingUbahDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('settingaccount.edit_ubah_data');

        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('settingaccount.edit_data_popup', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function saveData(Request $request)
    {
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nama_lengkap' => 'nullable|string|max:255',
            'no_telepon' => 'nullable|string|max:20',
            'tgl_lahir' => 'nullable|date',
        ]);

        // Mengambil user yang sedang login
        $user = auth()->user();

        // Simpan data yang dikirimkan dari form
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->no_telepon = $request->input('no_telepon');
        $user->tgl_lahir = $request->input('tgl_lahir');
        // $user->save();

        // Redirect kembali ke halaman setting akun atau halaman lain sesuai kebutuhan
        return redirect()->route('settingAkun')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
