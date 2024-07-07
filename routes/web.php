<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;
use App\Http\Controllers\produkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',[beranda::class, 'index'])->name('beranda');
Route::get('/produk',[produkController::class, 'index'])->name('produk');
// Route::view('/homepage','layouts.beranda');