<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Pegawai\BerandaController;
use App\Http\Controllers\SuperAdmin\MasterData\BerandaController as MasterDataBerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Kajur\IzinController;
use App\Http\Controllers\Kajur\SakitController;
use App\Http\Controllers\Profile\PegawaiProfileController;
use App\Http\Controllers\Kajur\SkpController;
use App\Http\Controllers\Kepegawaian\IzinController as KepegawaianIzinController;
use App\Http\Controllers\Pegawai\IzinController as PegawaiIzinController;
use App\Http\Controllers\Qr\PengajuanController;
use App\Http\Controllers\Qr\QrController;

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

// cetan izin Kajur
Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);

// cetan izin kepegawaian
Route::get('cetak_izin/{id}', [KepegawaianIzinController::class, 'cetak']);


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
