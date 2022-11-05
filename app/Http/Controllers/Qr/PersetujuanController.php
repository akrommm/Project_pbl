<?php

namespace App\Http\Controllers\Qr;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class PersetujuanController extends Controller
{
    public function generateizin(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'devisi' => 'required',
            'tanggal' => 'required',
            'perihal' => 'required',
        ]);

        $logo =  public_path('assets/images/logo/inim.png');
        $data = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Persetujuan Surat Izin Pada :
Nama Pegawai    : " . request('nama') . "
Unit Kerja      : " . request('devisi') . "
Tanggal         : " . request('tanggal') . "
Perihal         : " . request('perihal');
        $writer = new PngWriter();
        $filenama = request()->user()->nama . ".png";
        // Create QR code
        $qrCode = QrCode::create($data)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create($logo)
            ->setResizeToWidth(100);

        $label = Label::create(request()->user()->nama)
            ->setTextColor(new Color(0, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);

        // Directly output the QR code
        // $result->saveToFile(public_path("JneQr/$filenama"));
        $result->saveToFile(public_path('SiMantapQR'), $filenama);


        // $response = response()->download(public_path("SiMantapQR/$filenama"));
        $response = response()->download(public_path('SiMantapQR'), $filenama);

        ob_clean();

        return $response->deleteFileAfterSend();
    }
    public function generatebarang(Request $request)
    {
        $request->validate([
            'tanggal_spb' => 'required',
            'keperluan_devisi' => 'required',
            'lokasi_kantor' => 'required',
        ]);


        $logo =  public_path('asset/logo/jne.png');
        $data = "
        Memberikan Pengesahan Tanda tangan Persetujuan barang pada  :
        tanggal spb : " . request('tanggal_spb') . "
        keperluan devisi : " . request('keperluan_devisi') . "
        lokasi kantor : " . request('lokasi_kantor');
        $writer = new PngWriter();
        $filenama = request('keperluan_devisi') . ".png";
        // Create QR code
        $qrCode = QrCode::create($data)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create($logo)
            ->setResizeToWidth(100);

        $label = Label::create(request('nama'))
            ->setTextColor(new Color(0, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);

        // Directly output the QR code
        $result->saveToFile(public_path("JneQr/$filenama"));

        $response = response()->download(public_path("JneQr/$filenama"));
        ob_clean();

        return $response->deleteFileAfterSend();
    }
}
