<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\PengajuanCuti\Cuti;
use App\Models\PengajuanDinas\Dinas;
use App\Models\PengajuanIzin\Izin;
use App\Models\PengajuanSakit\Sakit;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function __invoke()
    {
        $cuti = Cuti::where('status_kj', '=', 'SETUJUI')->count();
        $izin = Izin::where('status', '=', '2')->count();
        $dinas = Dinas::where('status', '=', '1')->count();
        return view('kepegawaian.beranda.beranda', compact('izin', 'cuti', 'dinas'));
    }
}
