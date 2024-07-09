<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\settingaccountController;
use App\Http\Controllers\settingaccountAlamatController;
use App\Http\Controllers\settingUbahDataController;
use App\Http\Controllers\settingUbahAlamatController;
use App\Http\Controllers\LoginnController;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\admin\homeController;
<<<<<<< HEAD
use App\Http\Controllers\admin\produkhewanController;
use App\Http\Controllers\admin\tabunganController;
use App\Http\Controllers\admin\tabungankurbanController;
=======
>>>>>>> fc09d65dc0565e54e93c6b5ef7b6fc0db4d8f51f


Route::get('/', function () {
    return view('welcome');
});


Route::view('/homepage','layouts.beranda')->name('beranda');
// Route::view('/login','login.index')->name('login');

// Route::get('/login','register.index')->name('register');
// Route::view('/login','login.index')->name('login');
// Route::view('/register','login.register')->name('register');

Route::get('/login',[LoginnController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login',[LoginnController::class, 'loginPost'])->name('loginPost');
Route::get('/register',[RegisterrController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register',[RegisterrController::class, 'registerPost'])->name('registerPost');

Route::get('/produkhewan', [ProdukhewanController::class, 'index'])->name('produkhewan.index');
Route::get('/produkhewan/create', [ProdukhewanController::class, 'create'])->name('produkhewan.create');
Route::post('/produkhewan', [ProdukhewanController::class, 'store'])->name('produkhewan.store');
Route::get('/produhewan/{id}/edit', [ProdukhewanController::class, 'edit'])->name('produkhewan.edit');
Route::put('/produkhewan/{id}', [ProdukhewanController::class, 'update'])->name('produkhewan.update');
Route::delete('/produkhewan/{id}', [ProdukhewanController::class, 'destroy'])->name('produkhewan.destroy');


Route::view('/inputtabungan','tabungan.inputtabungan')->name('inputtabungan');
Route::view('/tabungan','tabungan.tabungan')->name('tabungan');
Route::view('/contact1', 'layouts.contact1')->name('contact1');
Route::view('/tentang', 'layouts.tentang')->name('tentang');
Route::view('/home', 'admin.home')->name('home');
Route::view('/produkhewan', 'admin.produkhewan')->name('produkhewan');
<<<<<<< HEAD
Route::view('/tabungan', 'admin.tabungan')->name('tabungan');
=======
>>>>>>> fc09d65dc0565e54e93c6b5ef7b6fc0db4d8f51f
Route::view('/tabungankurban', 'admin.tabungankurban')->name('tabungankurban');


// Route::view('/homepage', 'layouts.beranda')->name('beranda');
// Route::get('/homepage', [beranda::class, 'index'])->name('beranda');
Route::get('/homepage', [beranda::class, 'index'])->name('beranda')->middleware('auth');
Route::get('/produk', [produkController::class, 'index'])->name('produk');
Route::get('/tentang',[tentangController::class, 'index'])->name('tentang');
Route::get('/home',[homeController::class, 'index'])->name('home');
<<<<<<< HEAD
Route::get('/produkhewan',[produkhewanController::class, 'index'])->name('produkhewan');
Route::get('/tabungan',[tabunganController::class, 'index'])->name('tabungan');
Route::get('/tabungankurban',[tabungankurbanController::class, 'index'])->name('tabungankurban');
=======

>>>>>>> fc09d65dc0565e54e93c6b5ef7b6fc0db4d8f51f



Route::get('/settingAkun', [settingaccountController::class, 'index2']);
Route::get('/contact1', [ContactController::class, 'index'])->name('contact1');
Route::get('/settingAkun', [settingaccountController::class, 'index'])->name('settingAkun');
Route::get('/settingAkun/ubahData', [settingUbahDataController::class, 'index'])->name('ubahData');

Route::get('/settingAlamat', [settingaccountAlamatController::class, 'index'])->name('settingAlamat');
// Route::get('/settingAkun/ubahAlamat', [settingUbahAlamatController::class, 'index'])->name('ubahAlamat');
Route::get('/settingAkun/ubahAlamat', [SettingUbahAlamatController::class, 'index'])->name('settingUbahAlamat');
Route::post('/settingAkun/tambahAlamat', [SettingUbahAlamatController::class, 'createAlamat'])->name('tambahAlamat');
Route::put('/settingAkun/updateAlamat/{id}', [SettingUbahAlamatController::class, 'updateAlamat'])->name('updateAlamat');
Route::delete('/settingAkun/hapusAlamat/{id}', [SettingUbahAlamatController::class, 'destroyAlamat'])->name('hapusAlamat');
Route::get('/ubah-alamat', function () {
    return view('settingaccount.ubah_alamat');
})->name('ubah.alamat');


