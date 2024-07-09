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
        $user = UserRegisterr::find($id);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->no_telepon = $request->no_telepon;
        $user->tgl_lahir = $request->tgl_lahir;

        $user->save();

        return redirect()->route('settingAkun')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
