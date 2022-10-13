<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Kajur\AbsensiController;
use App\Http\Controllers\Kajur\BerandaController;
use App\Http\Controllers\Kajur\KinerjaController;
use App\Http\Controllers\Kajur\SkpController;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('kinerja', KinerjaController::class);
Route::resource('skp', SkpController::class);
