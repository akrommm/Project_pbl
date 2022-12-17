<?php

use App\Http\Controllers\Unit\AbsensiController;
use App\Http\Controllers\Unit\BerandaController;
use Illuminate\Support\Facades\Route;


Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
