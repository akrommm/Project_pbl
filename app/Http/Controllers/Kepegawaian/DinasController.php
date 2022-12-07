<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\PengajuanDinas\Dinas;
use App\Models\PengajuanSakit\Sakit;
use Illuminate\Support\Str;
use PhpOffice\PhpWord\TemplateProcessor;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Alignment\LabelAlignmentLeft;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class DinasController extends Controller
{
    public function show($id)
    {
        return view('kepegawaian.dinas.show', [
            'dinas' => Dinas::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('kepegawaian.dinas.edit', [
            'dinas' => Dinas::findOrFail($id)
        ]);
    }

    public function update($id)
    {
        $dinas = Dinas::findOrFail($id);
        $dinas->keterangan = request('keterangan');
        $dinas->status = request('status');
        $dinas->save();

        return redirect('kepegawaian/pengajuan-selesai');
    }

    public function wordExport1($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit/sakit_kepegawaian.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('nama_kj', $sakit->nama_kj);
        $templateProcessor->setValue('nama_ak', $sakit->nama_ak);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('nomor_surat', $sakit->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $sakit->tanggal_surat_string);
        $templateProcessor->setValue('dari_tanggal', $sakit->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $sakit->sampai_tanggal_string);
        $qrdata = ["path" => $sakit->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $sakit->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', ["path" => $sakit->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $sakit->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $sakit->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport2($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit/sakit_kajur.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('nama_kj', $sakit->nama_kj);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('nomor_surat', $sakit->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $sakit->tanggal_surat_string);
        $templateProcessor->setValue('dari_tanggal', $sakit->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $sakit->sampai_tanggal_string);
        $qrdata = ["path" => $sakit->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $sakit->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', ["path" => $sakit->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $sakit->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
