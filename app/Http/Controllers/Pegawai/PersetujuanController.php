<?php

namespace App\Http\Controllers\Pegawai;

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
            'jabatan' => 'required',
            'devisi' => 'required',
            'tanggal' => 'required',
        ]);

        $logo =  public_path('assets/images/logo/inim.png');
        $data = "
        Memberikan Pengesahan Tanda tangan Persetujuan Izin  pada  :
        Nama Pegawai : " . request('nama') . "
        Jabatan Pegawai : " . request('jabatan') . "
        Devisi Pegawai : " . request('devisi') . "
        Tanggal Persetujuan : " . request('tanggal');
        $writer = new PngWriter();
        $filenama = request('nama') . ".png";
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

        $result = $writer->write($qrCode, $logo);

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

        $result = $writer->write($qrCode, $logo);

        // Directly output the QR code
        $result->saveToFile(public_path("JneQr/$filenama"));

        $response = response()->download(public_path("JneQr/$filenama"));
        ob_clean();

        return $response->deleteFileAfterSend();
    }
}
