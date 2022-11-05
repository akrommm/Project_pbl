<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Izin;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Models\Pegawai\izin as PegawaiSakit;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $izin->keterangan = request('keterangan');
        $izin->status = request('status');
        $izin->qr_kj = request('qr_kj');
        $izin->save();

        $izin->handleUploadFoto();

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

    public function wordExport($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/inim.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        // if (request('qr')) $templateProcessor->setImageValue('qr', $qrdata);
        // if (request('qr_kj')) $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        // if (request('path')) $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        // $templateProcessor->setImageValue('qr', '');
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function show(Izin $izin)
    {
        $data['list_izin'] = Izin::where('id', $izin->id)->get();
        return view('kajur.izin.izin_detail', $data);
    }
}
