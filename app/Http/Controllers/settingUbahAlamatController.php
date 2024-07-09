<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class SettingUbahAlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        // Contoh mengambil semua alamat yang dimiliki oleh pengguna
        $alamat = Alamat::where('idUser', $user->idUser)->get();
        return view('settingaccount.edit_ubah_alamat', compact('alamat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createAlamat(Request $request)
    {
        // Validasi request
        $request->validate([
            'idUser' => 'required|exists:newusers,idUser',
            'alamat_lengkap' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'kelurahan' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'provinsi' => 'required|string',
        ]);

        // Simpan data alamat baru
        $alamat = Alamat::create([
            'idUser' => $request->idUser,
            'alamat_lengkap' => $request->alamat_lengkap,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kelurahan' => $request->kelurahan,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'provinsi' => $request->provinsi,
        ]);

        // Berhasil menambahkan alamat
        // return response()->json(['message' => 'Alamat berhasil ditambahkan', 'data' => $alamat], 201);
        return redirect()->route('settingAkun')->with('success', 'Alamat berhasil ditambahkan');
    }

    // public function edit($id)
    // {
    //     $alamat = Alamat::findOrFail($id);
    //     return view('alamat.edit', compact('alamat'));
    // }

    /**
     * Mengupdate data alamat yang sudah ada.
     */
    public function updateAlamat(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'idUser' => 'required|exists:newusers,idUser',
            'alamat_lengkap' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'kelurahan' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'provinsi' => 'required|string',
        ]);

        // Temukan data alamat yang akan diupdate
        $alamat = Alamat::findOrFail($id);

        // Update data alamat
        $alamat->update([
            'idUser' => $request->idUser,
            'alamat_lengkap' => $request->alamat_lengkap,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kelurahan' => $request->kelurahan,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'provinsi' => $request->provinsi,
        ]);

        // Berhasil mengupdate alamat
        return redirect()->route('settingAkun')->with('success', 'Alamat berhasil diupdate');
    }

    /**
     * Menghapus data alamat.
     */
    public function destroyAlamat($id)
    {
        // Temukan data alamat yang akan dihapus
        $alamat = Alamat::findOrFail($id);
        $alamat->delete();

        // Berhasil menghapus alamat
        return redirect()->route('settingAkun')->with('success', 'Alamat berhasil dihapus');
    }


    // Metode lainnya seperti store(), show(), edit(), update(), dan destroy() bisa ditambahkan sesuai kebutuhan aplikasi Anda
}
