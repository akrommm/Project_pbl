<?php

namespace App\Http\Controllers\Qr;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


class PengajuanController extends Controller
{

    public function generateizin(Request $request)
    {
        $request->validate([
            'perihal' => 'required',
            'tanggal' => 'required',
            'devisi' => 'required',
        ]);

        $logo =  public_path('assets/images/logo/inim.png');
        $data = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
" . request('devisi') . "


Tanda Tangan Digital untuk Pengajuan Surat Izin :
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

        // $response = response()->download(public_path("SIMANTAPQR/$filenama"));
        $response = response()->download(public_path('SiMantapQR'), $filenama);
        ob_clean();

        return $response->deleteFileAfterSend();
    }

    public function generatesakit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'devisi' => 'required',
            'tanggal' => 'required',
            'barang' => 'required',
        ]);

        $logo =  public_path('assets/images/logo/inim.png');
        $data = "
        Memberikan Pengesahan Tanda tangan pengajuan sakit ke pada  :
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

        $label = Label::create(request('nama'))
            ->setTextColor(new Color(0, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);

        // Directly output the QR code
        $result->saveToFile(public_path("SiMantapQR/$filenama"));

        $response = response()->download(public_path("SiMantapQR/$filenama"));
        ob_clean();

        return $response->deleteFileAfterSend();
    }
}
