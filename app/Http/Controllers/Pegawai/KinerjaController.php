<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    public function index()
    {
        return view('pegawai.kinerja.index');
    }
}
