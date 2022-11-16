<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSakit\Sakit;
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

class SakitController extends Controller
{
    public function show($id)
    {
        return view('kepegawaian.sakit.show', [
            'sakit' => Sakit::findOrFail($id)
        ]);
    }

    public function update(Sakit $sakit)
    {
        $sakit->keterangan = request('keterangan');
        $sakit->status = 3;
        $sakit->nama_ak = auth()->user()->nama;
        $sakit->save();

        $data = [
            'nomor_surat' =>  request('nomor_surat'),
            'tanggal_surat' => request('tanggal_surat'),
            'perihal' => $sakit->perihal,
            'keterangan' => request('keterangan'),
            'nama' => $sakit->nama,
            'dari_tanggal' => $sakit->dari_tanggal_string,
            'sampai_tanggal' => $sakit->sampai_tanggal_string,
            'nip' => $sakit->nip,
            'jabatan' => $sakit->jabatan,

        ];

        $ttd = request()->user()->nama;

        $output_file = request()->user()->nama . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $sakit->qr_ak = $qrlogo;
        $sakit->save();

        return redirect('kepegawaian/pengajuan-selesai');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/inim.png');
        $isi_text = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Persetujuan Surat Izin Sakit Pada :
nomor surat : " . $data['nomor_surat'] . "
tanggal surat : " . $data['tanggal_surat'] . "
perihal : " . $data['perihal'];

        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create($isi_text)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create($logo)
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create($ttd)
            ->setTextColor(new Color(0, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);
        $result->saveToFile("app/SiMantapQR/kepegawaian/" . $output_file);

        return "app/SiMantapQR/kepegawaian/$output_file";
    }

    public function wordExport1($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit/sakit_kepegawaian.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('nama_kj', $sakit->nama_kj);
        $templateProcessor->setValue('nama_ak', $sakit->nama_ak);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('nomor_surat', $sakit->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $sakit->tanggal_surat_string);
        $templateProcessor->setValue('dari_tanggal', $sakit->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $sakit->sampai_tanggal_string);
        $qrdata = ["path" => $sakit->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $sakit->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', ["path" => $sakit->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $sakit->qr_ak, 'width' => 100, 'height' => 100, 'ratio' => false]);
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
        $templateProcessor->setValue('nama_kj', $sakit->nama_kj);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('nomor_surat', $sakit->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $sakit->tanggal_surat_string);
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
