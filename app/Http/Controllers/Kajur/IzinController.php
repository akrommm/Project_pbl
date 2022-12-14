<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\PengajuanCuti\Cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PengajuanIzin\Izin;
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

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['list_cuti'] = Cuti::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.izin.index', $data);
    }

    public function update(Izin $izin)
    {
        $izin->nomor_surat = request('nomor_surat');
        $izin->tanggal_surat = request('tanggal_surat');
        $izin->nama_kj = auth()->user()->nama;
        $izin->keterangan = request('keterangan');
        $izin->status = 2;
        $izin->save();

        $filepath = 'word-template/Izin_kajur.docx';
        $data = [
            'nomor_surat' =>  request('nomor_surat'),
            'tanggal_surat' => request('tanggal_surat'),
            'perihal' => $izin->perihal,
            'keterangan' => request('keterangan'),
            'nama' => $izin->nama,
            'dari_tanggal' => $izin->dari_tanggal_string,
            'sampai_tanggal' => $izin->sampai_tanggal_string,
            'nip' => $izin->nip,
            'jabatan' => $izin->jabatan,

        ];

        $ttd = request()->user()->nama;

        $randomStr = Str::random(5);
        $output_file = $randomStr . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $izin->qr_kj = $qrlogo;
        $izin->save();


        return redirect('kajur/pengajuan-aktif')->with('success', 'Pengajuan Berhasil Diteruskan');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/inim.png');
        $isi_text = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Persetujuan Surat Izin Pada :
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
        $result->saveToFile("app/SiMantapQR/kajur/izin/" . $output_file);

        return "app/SiMantapQR/kajur/izin/$output_file";
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('kajur.izin.edit', $data);
    }

    public function wordExport($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kajur.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('nomor_surat', $izin->nomor_surat);
        $templateProcessor->setValue('tanggal_surat', $izin->tanggal_surat);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal_string);
        $qrdata = ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', $qrdata);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport1($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_pegawai.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('waktu', $izin->waktu_string);
        $templateProcessor->setValue('unitkerja', request()->user()->unitkerja->nama_unit);
        $templateProcessor->setValue('selama', $izin->selama);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function show(Izin $izin)
    {
        $data['list_izin'] = Izin::where('id', $izin->id)->get();
        return view('kajur.izin.izin_detail', $data);
    }
}
