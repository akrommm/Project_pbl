<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PengajuanDinas\Dinas;
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

class DinasLuarController extends Controller
{
    public function index()
    {
        $data['list_dinas'] = Dinas::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.dinas.index', $data);
    }

    public function show($id)
    {
        return view('pegawai.dinas.show', [
            'dinas' => Dinas::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('pegawai.dinas.edit', [
            'dinas' => Dinas::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('pegawai.dinas.create');
    }

    public function store()
    {
        $dinas = new Dinas();
        $dinas->id_pegawai = request()->user()->id;
        $dinas->id_unitkerja = request()->user()->unitkerja->id;
        $dinas->surat = request('surat');
        $dinas->perihal = request('perihal');
        $dinas->status = 1;
        $dinas->nama = request()->user()->nama;
        $dinas->nip = request()->user()->nip;
        $dinas->jabatan = request()->user()->jabatan;
        $dinas->save();

        $dinas->handleUploadLampiran();

        return redirect('pegawai/dinas')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function update($id)
    {
        $dinas = Dinas::find($id);
        if (request('perihal')) $dinas->perihal = request('perihal');
        $dinas->save();
        if (request('surat')) $dinas->handleUploadLampiran();

        return redirect('pegawai/dinas')->with('success', 'Berhasil Edit Pengajuan');
    }

    function destroy($id)
    {
        $dinas = Dinas::find($id);
        $dinas->handleDeleteLampiran();
        $dinas->delete();
        return redirect('pegawai/dinas')->with('danger', 'Pengajuan Berhasil Dihapus');
    }
}
