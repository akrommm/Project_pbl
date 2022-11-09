<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Kajur\IzinController;
use App\Http\Controllers\Kajur\PengajuanAktifController;
use App\Http\Controllers\Kajur\PengajuanSelesaiController;
use App\Http\Controllers\Kajur\SakitController;
use App\Http\Controllers\Profile\PegawaiProfileController;
use App\Http\Controllers\Kajur\SkpController;
use App\Http\Controllers\Kepegawaian\IzinController as KepegawaianIzinController;
use App\Http\Controllers\Kepegawaian\PengajuanSelesaiController as KepegawaianPengajuanSelesaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

// validasi skp
Route::put('setuju/{id}', [SkpController::class, 'setuju']);
Route::put('tolak/{id}', [SkpController::class, 'tolak']);

// validasi sakit
Route::put('setuju/{id}', [SakitController::class, 'setuju']);
Route::put('tolak/{id}', [SakitController::class, 'tolak']);

// validasi izin Kajur
Route::put('setuju/{id}', [IzinController::class, 'setuju']);
Route::put('tolak/{id}', [IzinController::class, 'tolak']);

// cetak izin Kajur
// Route::get('kajur/cetak_izin/word-export1/{id}', [IzinController::class, 'wordExport1']);
// Route::get('kajur/cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);
// Route::get('kajur/cetak_izin/word-export3/{id}', [PengajuanSelesaiController::class, 'wordExport3']);
// Route::get('kajur/cetak_izin/word-export2/{id}', [PengajuanAktifController::class, 'wordExport2']);

// cetak izin kepegawaian
Route::get('kepegawaian/cetak_izin/word-export3/{id}', [KepegawaianPengajuanSelesaiController::class, 'wordExport3']);
Route::get('kepegawaian/cetak_izin/word-export2/{id}', [KepegawaianIzinController::class, 'wordExport2']);


// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// profile
Route::resource('profile/pegawai', PegawaiProfileController::class);


Route::prefix('admin')->middleware('auth')->group(function () {
    include "_/admin.php";
});

Route::prefix('pegawai')->middleware('auth')->group(function () {
    include "_/pegawai.php";
});

Route::prefix('kajur')->middleware('auth')->group(function () {
    include "_/kajur.php";
});

Route::prefix('kepegawaian')->middleware('auth')->group(function () {
    include "_/kepegawaian.php";
});

Route::prefix('simantap')->middleware('auth')->group(function () {
    include "_/qr.php";
});
