<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PengajuanCuti\Cuti;
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


class PengajuanSelesaiController extends Controller
{
    public function index()
    {
        $data['list_cuti'] = Cuti::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.cuti.index', $data);
    }

    public function create()
    {
        return view('pegawai.cuti.create');
    }

    public function edit(Cuti $cuti)
    {
        $data['cuti'] = $cuti;
        return view('pegawai.cuti.edit', $data);
    }

    public function show($id)
    {
        return view('pegawai.pengajuan-selesai.show', [
            'cuti' => Cuti::findOrFail($id)
        ]);
    }
}
