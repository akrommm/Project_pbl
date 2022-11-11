<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Sakit;
use App\Models\PengajuanIzin\Izin;
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
        $izin->status = 3;
        $izin->nama_ak = auth()->user()->nama;
        $izin->save();

        $data = [
            'nomor_surat' =>  $izin->nomor_surat,
            'tanggal_surat' => $izin->tanggal_surat_string,
            'perihal' => $izin->perihal,
            'keterangan' => request('keterangan'),
            'nama' => $izin->nama,
            'dari_tanggal' => $izin->dari_tanggal_string,
            'sampai_tanggal' => $izin->sampai_tanggal_string,
            'nip' => $izin->nip,
            'jabatan' => $izin->jabatan,

        ];

        $ttd = request()->user()->nama;

        $output_file = request()->user()->nama . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $izin->qr_ak = $qrlogo;
        $izin->save();

        return redirect('kepegawaian/pengajuan-selesai');
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
        $result->saveToFile("app/SiMantapQR/kepegawaian/" . $output_file);

        return "app/SiMantapQR/kepegawaian/$output_file";
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

    public function wordExport2($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kajur.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nama_kj', $izin->nama_kj);
        $templateProcessor->setValue('tanggal_surat', $izin->tanggal_surat_string);
        $templateProcessor->setValue('nomor_surat', $izin->nomor_surat);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('dari_tanggal', $izin->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $izin->sampai_tanggal_string);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        // $templateProcessor->setImageValue('qr', '');
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
