<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Sakit;
use App\Models\PengajuanIzin\Izin;
use PhpOffice\PhpWord\TemplateProcessor;

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('kepegawaian.izin.index', $data);
    }

    public function show(Izin $izin)
    {
        $data['list_izin'] = Izin::where('id', $izin->id)->get();
        return view('kepegawaian.izin.izin_detail', $data);
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('kepegawaian.izin.izin_detail', $data);
    }

    public function update(Izin $izin)
    {
        $izin->keterangan = request('keterangan');
        $izin->status = request('status');
        $izin->qr_ak = request('qr_ak');
        $izin->save();

        $izin->handleUploadFotoKepegawaian();

        return redirect('kepegawaian/izin');
    }

    public function store()
    {
        $izin = new izin();
        $izin->izin = request('izin');
        $izin->file = request('file');
        $izin->id_pegawai = request()->user()->id;
        $izin->status = 1;
        $izin->save();

        $izin->handleUploadFile();

        return redirect('kepegawaian/izin')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function setuju($id)
    {
        $izin = izin::find($id);
        $izin->status = 2;
        $izin->save();
        return redirect('kepegawaian/izin')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $izin = izin::find($id);
        $izin->status = 3;
        $izin->save();
        return redirect('kepegawaian/izin')->with('danger', 'Data Ditolak');
    }

    public function wordExport2($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kajur2.docx');
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
        $templateProcessor->setImageValue('qr_ak', ["path" => 'app/SiMantapQR/kepegawaian/97b1a178-352e-4772-9f32-fb5e7cfc8e3b-1667892419-7pzoM.png', 'width' => 100, 'height' => 100, 'ratio' => false]);
        // $templateProcessor->setImageValue('qr', '');
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
