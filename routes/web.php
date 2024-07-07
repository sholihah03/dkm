<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/homepage','layouts.beranda')->name('beranda');
Route::view('/login','login.index')->name('login');
Route::view('/register','login.register')->name('register');
Route::view('/inputtabungan','tabungan.inputtabungan')->name('inputtabungan');
Route::view('/tabungan','tabungan.tabungan')->name('tabungan');