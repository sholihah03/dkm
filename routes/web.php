<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beranda;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',[beranda::class, 'index']);
// Route::view('/homepage','layouts.beranda');