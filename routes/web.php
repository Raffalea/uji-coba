<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\MutasiController;

Route::get('/', function () {
    return view('welcome');
});

    Route::resource('kategori', KategoriController::class);
    Route::resource('lokasi', LokasiController::class);
    Route::resource('aset', AsetController::class);
    Route::resource('mutasi', MutasiController::class);
