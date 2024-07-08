<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\settingaccountController;
use App\Http\Controllers\settingUbahDataController;
use App\Http\Controllers\LoginnController;
use App\Http\Controllers\RegisterrController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/login','login.index')->name('login');
// Route::view('/register','login.register')->name('register');

Route::get('/login',[LoginnController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login',[LoginnController::class, 'loginPost'])->name('loginPost');
Route::get('/register',[RegisterrController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register',[RegisterrController::class, 'registerPost'])->name('registerPost');


Route::view('/inputtabungan','tabungan.inputtabungan')->name('inputtabungan');
Route::view('/tabungan','tabungan.tabungan')->name('tabungan');


// Route::view('/homepage', 'layouts.beranda')->name('beranda');
Route::get('/homepage', [beranda::class, 'index'])->name('beranda')->middleware('auth');





Route::get('/settingAkun', [settingaccountController::class, 'index'])->name('settingAkun');
Route::get('/ubahData', [settingUbahDataController::class, 'index'])->name('ubahData');
Route::get('/ubah-alamat', function () {
    return view('settingaccount.ubah_alamat');
})->name('ubah.alamat');

