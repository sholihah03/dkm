<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;

use App\Http\Controllers\produkController;
use App\Http\Controllers\settingaccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\tentangController;
// use App\Http\Controllers\settings\settingaccountController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/login','login.index')->name('login');
Route::view('/register','login.register')->name('register');
Route::view('/inputtabungan','tabungan.inputtabungan')->name('inputtabungan');
Route::view('/tabungan','tabungan.tabungan')->name('tabungan');
Route::view('/contact1', 'layouts.contact1')->name('contact1');
Route::view('/tentang', 'layouts.tentang')->name('tentang');


// Route::view('/homepage', 'layouts.beranda')->name('beranda');
Route::get('/homepage', [beranda::class, 'index'])->name('beranda');



// Route::get('/settingAkun', [settingaccountController::class, 'index']);
Route::get('/settingAkun', [settingaccountController::class, 'index2']);
Route::get('/contact1', [ContactController::class, 'index'])->name('contact1');
// Route::get('/settingAkun', [settingaccountController::class, 'index3']);
Route::get('/settingAkun', [settingaccountController::class, 'index'])->name('settingAkun');
Route::get('/ubahData', [settingUbahDataController::class, 'index'])->name('ubahData');

// Route::view('/homepage','layouts.beranda1')->name('beranda1');

