<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Sakit;
use App\Models\Kepegawaian\Izin;
use App\Models\PengajuanCuti\Cuti;
use App\Models\PengajuanDinas\Dinas;
use App\Models\PengajuanIzin\Izin as PengajuanIzinIzin;
use PhpOffice\PhpWord\TemplateProcessor;

class PengajuanSelesaiController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['list_cuti'] = Cuti::all();
        $data['list_dinas'] = Dinas::all();
        $data['pegawai'] = auth()->user();
        return view('kepegawaian.pengajuan-selesai.index', $data);
    }

    public function show($id)
    {
        return view('kepegawaian.pengajuan-selesai.show', [
            'izin' => Izin::findOrFail($id)
        ]);
    }

    public function show1($id)
    {
        return view('kepegawaian.pengajuan-selesai.show-sakit', [
            'cuti' => Cuti::findOrFail($id)
        ]);
    }

    public function wordExport10($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/izin_kepegawaian.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('waktu', $izin->waktu_string);
        $templateProcessor->setValue('unitkerja', request()->user()->unitkerja->nama_unit);
        $templateProcessor->setValue('selama', $izin->selama);
        $templateProcessor->setValue('pangkat', $izin->pangkat);
        $templateProcessor->setValue('nama_ak', $izin->nama_ak);
        $templateProcessor->setValue('status', $izin->status);
        $templateProcessor->setValue('nip_ak', $izin->nip_ak);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport11($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/izin_kepegawaian.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('waktu', $izin->waktu_string);
        $templateProcessor->setValue('unitkerja', request()->user()->unitkerja->nama_unit);
        $templateProcessor->setValue('selama', $izin->selama);
        $templateProcessor->setValue('pangkat', $izin->pangkat);
        $templateProcessor->setValue('nama_ak', $izin->nama_ak);
        $templateProcessor->setValue('status', $izin->status);
        $templateProcessor->setValue('nip_ak', $izin->nip_ak);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
