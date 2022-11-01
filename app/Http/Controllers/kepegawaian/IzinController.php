<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\Kepegawaian\Izin;
use App\Models\Pegawai\izin as PegawaiSakit;
use PDF;

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['pegawai'] = auth()->user();
        return view('kepegawaian.izin.index', $data);
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

        return redirect('kepegawaian/izin')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function setuju($id)
    {
        $izin = izin::find($id);
        $izin->status = 2;
        $izin->save();
        return redirect('kepegawaian/izin')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $izin = izin::find($id);
        $izin->status = 3;
        $izin->save();
        return redirect('kepegawaian/izin')->with('danger', 'Data Ditolak');
    }

    public function cetak(Izin $izin)
    {
        $data = Izin::where('id', $izin->id)->get();
        $pdf = PDF::loadview('cetak_izin', ['data' => $data]);
        return $pdf->stream('cetak_izin.pdf', $data);
    }
}
