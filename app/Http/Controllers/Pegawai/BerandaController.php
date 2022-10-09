<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function __invoke()
    {
        return view('pegawai.beranda.beranda');
    }
}
