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
    // public function index()
    // {

    //     $user = Auth::user();
    //     return view('settingaccount.edit_data_popup', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     */

     public function index(Request $request)
     {
         $user = UserRegisterr::where('username', auth()->user()->username)->first();

         return view('settingaccount.index', compact('user'));
     }

     /**
      * Update the specified resource in storage.
      */

     public function updateData(Request $request)
     {
         $user = UserRegisterr::where('username', auth()->user()->username)->first();

         // Update existing fields
         $user->username = $request->input('username');
         $user->email = $request->input('email');
         $user->nama_lengkap = $request->input('nama_lengkap');
         $user->no_telepon = $request->input('no_telepon');
         $user->tgl_lahir = $request->input('tgl_lahir');

         $user->save();

         return redirect()->route('settingAkun')->with('success', 'Data berhasil diperbarui.');
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
