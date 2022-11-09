<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Izin;
use App\Models\Kajur\Sakit;
use PhpOffice\PhpWord\TemplateProcessor;

class PengajuanSelesaiController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.pengajuan-selesai.index', $data);
    }

    public function show($id)
    {
        return view('kajur.pengajuan-selesai.show', [
            'izin' => Izin::findOrFail($id)
        ]);
    }

    public function wordExport3($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kepegawaian.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal_string);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        // if (request('qr')) $templateProcessor->setImageValue('qr', $qrdata);
        // if (request('qr_kj')) $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        // if (request('path')) $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        // $templateProcessor->setImageValue('qr', '');
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
