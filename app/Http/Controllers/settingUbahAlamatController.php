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

    public function indexAlamat($id = null)
    {
        $alamat = $id ? Alamat::findOrFail($id) : new Alamat();
        return view('settingaccount.edit_ubah_alamat', compact('alamat'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function tambahAlamat(Request $request)
    {
        $user = auth()->user();

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $alamat = new Alamat();
        $alamat->idUser = $user->id;
        $alamat->alamat_lengkap = $request->input('alamat_lengkap');
        $alamat->rt = $request->input('rt');
        $alamat->rw = $request->input('rw');
        $alamat->kelurahan = $request->input('kelurahan');
        $alamat->kabupaten = $request->input('kabupaten');
        $alamat->kecamatan = $request->input('kecamatan');
        $alamat->provinsi = $request->input('provinsi');

        $alamat->save();

        return redirect()->route('settingAkun')->with('success', 'Alamat berhasil ditambahkan.');
    }


    /**
     * Mengupdate data alamat yang sudah ada.
     */
    public function updateAlamat(Request $request, $id)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
        
        $alamat = Alamat::findOrFail($id);
        $alamat->alamat_lengkap = $request->input('alamat_lengkap');
        $alamat->rt = $request->input('rt');
        $alamat->rw = $request->input('rw');
        $alamat->kelurahan = $request->input('kelurahan');
        $alamat->kabupaten = $request->input('kabupaten');
        $alamat->kecamatan = $request->input('kecamatan');
        $alamat->provinsi = $request->input('provinsi');

        $alamat->save();

        return redirect()->route('settingAkun')->with('success', 'Alamat berhasil diperbarui.');
    }

    /**
     * Menghapus data alamat.
     */
    public function destroyAlamat($id)
    {

        // $alamat = Alamat::findOrFail($id);
        // $alamat->delete();

        // return redirect()->route('settingAkun')->with('success', 'Alamat berhasil dihapus');
    }

}
