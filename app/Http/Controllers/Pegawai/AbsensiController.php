<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('pegawai.absensi.index');
    }

    public function create()
    {
        return view('pegawai.absensi.create');
    }
}
