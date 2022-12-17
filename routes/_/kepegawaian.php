<?php

use App\Http\Controllers\Kepegawaian\AbsensiController;
use App\Http\Controllers\Kepegawaian\BerandaController;
use App\Http\Controllers\Kepegawaian\CutiController;
use App\Http\Controllers\Kepegawaian\DinasController;
use App\Http\Controllers\Kepegawaian\IzinController;
use App\Http\Controllers\Kepegawaian\PengajuanSelesaiController;
use App\Http\Controllers\Kepegawaian\QrController;
use App\Http\Controllers\Kepegawaian\SakitController;
use App\Models\PengajuanCuti\Cuti;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

Route::get('beranda', BerandaController::class);
Route::resource('izin', IzinController::class);
Route::resource('cuti', CutiController::class);
Route::resource('dinas', DinasController::class);
Route::resource('absensi', AbsensiController::class);
Route::get('exportabsensi/{id}', [AbsensiController::class, 'absensiexport']);

Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);
Route::get('izin_detail/{id}', [IzinController::class, 'izin_detail']);
Route::resource('pengajuan-selesai', PengajuanSelesaiController::class);
Route::get('pengajuan-selesai1/{id}', [PengajuanSelesaiController::class, 'show1']);

Route::get('cetak_izin/word-export2/{id}', [IzinController::class, 'wordExport2']);
Route::get('cetak_sakit/word-export1/{id}', [SakitController::class, 'wordExport1']);
Route::get('cetak_sakit/word-export2/{id}', [SakitController::class, 'wordExport2']);

Route::get('qr', [QrController::class, 'index']);
Route::post('pengajuan-izin', [PengajuanController::class, 'generateizin']);
Route::post('pengajuan-sakit', [PengajuanController::class, 'generatesakit']);
Route::post('persetujuan-izin', [PersetujuanController::class, 'generateizin']);
Route::post('persetujuan-sakit', [PersetujuanController::class, 'generatesakit']);

// pengajuan selesai
Route::get('cetak_izin/word-export10/{id}', [PengajuanSelesaiController::class, 'wordExport10']);
Route::get('cetak_izin/word-export11/{id}', [PengajuanSelesaiController::class, 'wordExport11']);

// pengajuan izin
Route::get('cetak_izin/word-export2/{id}', [IzinController::class, 'wordExport2']);

// pengajuan cuti
Route::get('cetak_cuti/word-export1/{id}', [CutiController::class, 'wordExport1']);
Route::get('cetak_cuti/word-export2/{id}', [CutiController::class, 'wordExport2']);
