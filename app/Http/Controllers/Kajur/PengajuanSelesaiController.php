<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Izin;
use App\Models\Kajur\Sakit;
use App\Models\PengajuanCuti\Cuti;
use PhpOffice\PhpWord\TemplateProcessor;

class PengajuanSelesaiController extends Controller
{
    public function index()
    {
        $data['list_cuti'] = Cuti::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.pengajuan-selesai.index', $data);
    }

    public function show($id)
    {
        return view('kajur.pengajuan-selesai.show', [
            'cuti' => Cuti::findOrFail($id)
        ]);
    }

    public function show1($id)
    {
        return view('kajur.pengajuan-selesai.show-sakit', [
            'sakit' => Sakit::findOrFail($id)
        ]);
    }
    
    public function wordExport1($id)
    {
        $cuti = Cuti::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/cuti/cuti_kepegawaian.docx');
        $templateProcessor->setValue('nama', $cuti->nama);
        $templateProcessor->setValue('nama_kj', $cuti->nama_kj);
        $templateProcessor->setValue('nama_ak', $cuti->nama_ak);
        $templateProcessor->setValue('nip_ak', $cuti->nip_ak);
        $templateProcessor->setValue('nip_kj', $cuti->nip_kj);
        $templateProcessor->setValue('nip', $cuti->nip);
        $templateProcessor->setValue('jabatan', $cuti->jabatan);
        $templateProcessor->setValue('alasan', $cuti->alasan);
        $templateProcessor->setValue('jenis_cuti', $cuti->jenis_cuti);
        $templateProcessor->setValue('masa_kerja', $cuti->masa_kerja);
        $templateProcessor->setValue('lamanya_cuti', $cuti->lamanya_cuti);
        $templateProcessor->setValue('unitkerja', $cuti->pegawai->unitkerja->nama_unit);
        $templateProcessor->setValue('alamat', $cuti->alamat);
        $templateProcessor->setValue('pangkat', $cuti->pangkat);
        $templateProcessor->setValue('telp', $cuti->telp);
        $templateProcessor->setValue('status_kj', $cuti->status_kj);
        $templateProcessor->setValue('status_ak', $cuti->status_ak);
        $templateProcessor->setValue('created_at', $cuti->created_at_string);
        $templateProcessor->setValue('keterangan', $cuti->keterangan);
        $templateProcessor->setValue('keterangan_ak', $cuti->keterangan_ak);
        $templateProcessor->setValue('dari_tanggal', $cuti->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $cuti->sampai_tanggal_string);
        $qrdata = ["path" => $cuti->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $cuti->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $cuti->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $cuti->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
