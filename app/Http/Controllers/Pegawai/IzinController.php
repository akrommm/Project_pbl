<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PengajuanIzin\Izin;
use PhpOffice\PhpWord\TemplateProcessor;

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.izin.index', $data);
    }

    public function create()
    {
        return view('pegawai.izin.create');
    }

    public function store()
    {
        $izin = new izin();
        $izin->id_pegawai = request()->user()->id;
        $izin->id_unitkerja = request()->user()->unitkerja->id;
        $izin->perihal = request('perihal');
        $izin->alasan = request('alasan');
        $izin->qr = request('qr');
        $izin->dari_tanggal = request('dari_tanggal');
        $izin->sampai_tanggal = request('sampai_tanggal');
        $izin->nama = request()->user()->nama;
        $izin->nip = request()->user()->nip;
        $izin->jabatan = request()->user()->jabatan;
        $izin->status = 1;
        $izin->save();

        $izin->handleUploadFoto();

        return redirect('pegawai/izin')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function update(Izin $izin)
    {
        $izin->komen = request('komen');
        $izin->status = request('status');
        $izin->save();

        $izin->handleUploadFile();

        return redirect('pegawai/izin');
    }

    public function show(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('pegawai.izin.show', $data);
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('pegawai.izin.izin_detail', $data);
    }

    function destroy(Izin $izin)
    {
        $izin->handleDelete();
        $izin->handleDeleteKajur();
        $izin->handleDeleteKepegawaian();
        $izin->delete();
        return redirect('pegawai/izin')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

    public function wordExport($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_pegawai.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal_string);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport2($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kajur.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nama_kj', $izin->nama_kj);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nomor_surat', $izin->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $izin->tanggal_surat_string);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal_string);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
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
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
