<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Izin;
use App\Models\Pegawai\izin as PegawaiSakit;

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.izin.index', $data);
    }

    public function store()
    {
        $izin = new izin();
        $izin->izin = request('izin');
        $izin->file = request('file');
        $izin->id_pegawai = request()->user()->id;
        $izin->status = 1;
        $izin->save();

        $izin->handleUploadFile();

        return redirect('kajur/izin')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function setuju($id)
    {
        $izin = izin::find($id);
        $izin->status = 2;
        $izin->save();
        return redirect('kajur/izin')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $izin = izin::find($id);
        $izin->status = 3;
        $izin->save();
        return redirect('kajur/izin')->with('danger', 'Data Ditolak');
    }
}
