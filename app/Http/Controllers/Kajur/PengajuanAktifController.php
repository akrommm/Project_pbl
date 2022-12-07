<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\PengajuanCuti\Cuti;
use App\Models\PengajuanIzin\Izin;
use App\Models\PengajuanSakit\Sakit;
use PhpOffice\PhpWord\TemplateProcessor;

class PengajuanAktifController extends Controller
{
    public function index()
    {
        $data['list_cuti'] = Cuti::all();
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.pengajuan-aktif.index', $data);
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('kajur.pengajuan-aktif.show', $data);
    }

    public function show($id)
    {
        return view('kajur.pengajuan-aktif.show-izin', [
            'izin' => Izin::findOrFail($id)
        ]);
    }

    public function show1($id)
    {
        return view('kajur.pengajuan-aktif.show-sakit', [
            'sakit' => Sakit::findOrFail($id)
        ]);
    }

    public function wordExport2($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kajur.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nama_kj', $izin->nama_kj);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('nomor_surat', $izin->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $izin->tanggal_surat_string);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal_string);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
