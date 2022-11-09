<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSakit\Sakit;
use PhpOffice\PhpWord\TemplateProcessor;

class SakitController extends Controller
{
    public function index()
    {
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.sakit.index', $data);
    }

    public function show($id)
    {
        return view('kajur.sakit.show', [
            'sakit' => Sakit::findOrFail($id)
        ]);
    }

    public function store()
    {
        $sakit = new sakit();
        $sakit->sakit = request('sakit');
        $sakit->file = request('file');
        $sakit->id_pegawai = request()->user()->id;
        $sakit->status = 1;
        $sakit->save();

        $sakit->handleUploadFile();

        return redirect('kajur/sakit')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function update(Sakit $sakit)
    {
        $sakit->keterangan = request('keterangan');
        $sakit->status = request('status');
        $sakit->qr_kj = request('qr_kj');
        $sakit->save();

        $sakit->handleUploadFotoKajur();

        return redirect('kajur/izin');
    }

    public function wordExport1($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit/sakit_pegawai.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('dari_tanggal', $sakit->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $sakit->sampai_tanggal_string);
        $qrdata = ["path" => $sakit->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $sakit->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
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
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
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
