<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSakit\Sakit;
use PhpOffice\PhpWord\TemplateProcessor;

class SakitController extends Controller
{
    public function index()
    {
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.sakit.index', $data);
    }

    public function create()
    {
        return view('pegawai.sakit.create');
    }

    public function show(Sakit $sakit)
    {
        $data['sakit'] = $sakit;
        return view('pegawai.sakit.show', $data);
    }

    public function store()
    {
        $sakit = new Sakit();
        $sakit->perihal = request('perihal');
        $sakit->qr = request('qr');
        $sakit->dari_tanggal = request('dari_tanggal');
        $sakit->sampai_tanggal = request('sampai_tanggal');
        $sakit->lampiran = request('lampiran');
        $sakit->id_pegawai = request()->user()->id;
        $sakit->nama = request()->user()->nama;
        $sakit->nip = request()->user()->nip;
        $sakit->jabatan = request()->user()->jabatan;
        $sakit->status = 1;
        $sakit->save();

        $sakit->handleUploadFoto();
        $sakit->handleUploadLampiran();

        return redirect('pegawai/sakit')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    function destroy(sakit $sakit)
    {
        $sakit->handleDelete();
        $sakit->handleDeleteKajur();
        $sakit->handleDeleteKepegawaian();
        $sakit->handleDeleteLampiran();
        $sakit->delete();
        return redirect('pegawai/sakit')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

    public function wordExport($id)
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
        $templateProcessor = new TemplateProcessor('word-template/sakit_kajur.docx');
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

    public function wordExport3($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit_kepegawaian.docx');
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
        $templateProcessor->setImageValue('qr_ak', ["path" => $sakit->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $sakit->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
