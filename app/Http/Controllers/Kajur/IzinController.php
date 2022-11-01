<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Izin;
use App\Models\Pegawai\izin as PegawaiSakit;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use PDF;
use Svg\Surface\SurfacePDFLib;

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.izin.index', $data);
    }

    public function update(Izin $izin)
    {
        $izin->komen = request('komen');
        $izin->status = request('status');
        $izin->save();

        $izin->handleUploadFile();

        return redirect('kajur/izin');
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('kajur.izin.izin_detail', $data);
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

    public function cetak(Izin $izin)
    {
        $data = Izin::where('id', $izin->id)->get();
        $pdf = PDF::loadview('cetak_izin', ['data' => $data]);
        return $pdf->stream('cetak_izin.pdf', $data);
    }

    public function show(Izin $izin)
    {
        $data['list_izin'] = Izin::where('id', $izin->id)->get();
        return view('kajur.izin.izin_detail', $data);
    }
}
