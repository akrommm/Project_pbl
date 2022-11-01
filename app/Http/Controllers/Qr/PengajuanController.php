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


class PengajuanController extends Controller
{

    public function generatelembur(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'devisi' => 'required',
            'tanggal' => 'required',
        ]);

        $logo =  public_path('asset/logo/jne.png');
        $data = "
        Memberikan Pengesahan Tanda tangan pengajuan lembur ke pada  :
        nama pegawai : " . request('nama') . "
        jabatan pegawai : " . request('jabatan') . "
        devisi pegawai : " . request('devisi') . "
        tanggal pengajuan : " . request('tanggal');
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
        $result->saveToFile(public_path('JneQr'), $filenama);

        // $response = response()->download(public_path("JneQr/$filenama"));
        $response = response()->download(public_path('JneQr'), $filenama);
        ob_clean();

        return $response->deleteFileAfterSend();
    }

    public function generatebarang(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'devisi' => 'required',
            'tanggal' => 'required',
            'barang' => 'required',
        ]);

        $logo =  public_path('asset/logo/jne.png');
        $data = "
        Memberikan Pengesahan Tanda tangan pengajuan barang ke pada  :
        nama pegawai : " . request('nama') . "
        jabatan pegawai : " . request('jabatan') . "
        devisi pegawai : " . request('devisi') . "
        jenis barang/jasa : " . request('barang') . "
        tanggal pengajuan : " . request('tanggal');
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
        $result->saveToFile(public_path("JneQr/$filenama"));

        $response = response()->download(public_path("JneQr/$filenama"));
        ob_clean();

        return $response->deleteFileAfterSend();
    }
}
