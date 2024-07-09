<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\settingaccountController;
// use App\Http\Controllers\settings\settingaccountController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/homepage','layouts.beranda')->name('beranda');
// Route::view('/login','login.index')->name('login');

Route::get('/login',[LoginController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login',[LoginController::class, 'loginPost'])->name('loginPost');
Route::get('/register',[RegisterController::class, 'registerIndex'])->name('registerIndex');
Route::post('/register',[RegisterController::class, 'registerPost'])->name('registerPost');

// Route::get('/login','register.index')->name('register');
Route::view('/inputtabungan','tabungan.inputtabungan')->name('inputtabungan');
Route::view('/tabungan','tabungan.tabungan')->name('tabungan');

Route::view('/homepage','layouts.beranda')->name('beranda');
Route::get('/homepage',[beranda::class, 'index']);
// Route::view('/homepage','layouts.beranda');




// Route::get('/settingAkun', [settingaccountController::class, 'index']);
Route::get('/settingAkun', [settingaccountController::class, 'index2']);
// Route::get('/settingAkun', [settingaccountController::class, 'index3']);
// Route::view('/homepage','layouts.beranda1')->name('beranda1');
