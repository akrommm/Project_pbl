<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\PengajuanIzin\Izin;
use App\Models\PengajuanSakit\Sakit;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function __invoke()
    {
        $sakit = Sakit::where('status', '=', '2')->count();
        $izin = Izin::where('status', '=', '2')->count();
        return view('kepegawaian.beranda.beranda', compact('izin', 'sakit'));
    }
}
