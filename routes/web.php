<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;

use App\Http\Controllers\produkController;

use App\Http\Controllers\settingaccountController;
use App\Http\Controllers\settingUbahDataController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/login','login.index')->name('login');
Route::view('/register','login.register')->name('register');
Route::view('/inputtabungan','tabungan.inputtabungan')->name('inputtabungan');
Route::view('/tabungan','tabungan.tabungan')->name('tabungan');


// Route::view('/homepage', 'layouts.beranda')->name('beranda');
Route::get('/homepage', [beranda::class, 'index'])->name('beranda');
Route::get('/produk', [produkController::class, 'index'])->name('produk');




Route::get('/settingAkun', [settingaccountController::class, 'index'])->name('settingAkun');
Route::get('/ubahData', [settingUbahDataController::class, 'index'])->name('ubahData');
