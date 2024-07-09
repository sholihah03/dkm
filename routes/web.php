<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\settingaccountController;
use App\Http\Controllers\settingUbahDataController;
use App\Http\Controllers\LoginnController;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\admin\homeController;
use App\Http\Controllers\admin\produkhewanController;
use App\Http\Controllers\admin\tabunganController;
use App\Http\Controllers\admin\tabungankurbanController;


Route::get('/', function () {
    return view('welcome');
});

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
Route::view('/tabungan', 'admin.tabungan')->name('tabungan');
Route::view('/tabungankurban', 'admin.tabungankurban')->name('tabungankurban');


// Route::view('/homepage', 'layouts.beranda')->name('beranda');
Route::get('/homepage', [beranda::class, 'index'])->name('beranda')->middleware('auth');
Route::get('/produk', [produkController::class, 'index'])->name('produk');
Route::get('/tentang',[tentangController::class, 'index'])->name('tentang');
Route::get('/home',[homeController::class, 'index'])->name('home');
Route::get('/produkhewan',[produkhewanController::class, 'index'])->name('produkhewan');
Route::get('/tabungan',[tabunganController::class, 'index'])->name('tabungan');
Route::get('/tabungankurban',[tabungankurbanController::class, 'index'])->name('tabungankurban');



// Route::get('/settingAkun', [settingaccountController::class, 'index']);
Route::get('/settingAkun', [settingaccountController::class, 'index2']);
Route::get('/contact1', [ContactController::class, 'index'])->name('contact1');
// Route::get('/settingAkun', [settingaccountController::class, 'index3']);
Route::get('/settingAkun', [settingaccountController::class, 'index'])->name('settingAkun');
Route::get('/ubahData', [settingUbahDataController::class, 'index'])->name('ubahData');
Route::get('/ubah-alamat', function () {
    return view('settingaccount.ubah_alamat');
})->name('ubah.alamat');

