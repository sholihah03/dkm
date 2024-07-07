<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\settingaccountController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\settings\settingaccountController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/homepage','layouts.beranda')->name('beranda');
Route::get('/homepage',[beranda::class, 'index']);
// Route::view('/homepage','layouts.beranda');




// Route::get('/settingAkun', [settingaccountController::class, 'index']);
Route::get('/settingAkun', [settingaccountController::class, 'index2']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Route::get('/settingAkun', [settingaccountController::class, 'index3']);
// Route::view('/homepage','layouts.beranda1')->name('beranda1');
