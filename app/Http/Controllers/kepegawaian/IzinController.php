<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\PengajuanCuti\Cuti;
use App\Models\PengajuanDinas\Dinas;
use App\Models\PengajuanIzin\Izin;
use Illuminate\Support\Str;
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
        $data['list_dinas'] = Dinas::all();
        $data['list_cuti'] = Cuti::all();
        $data['pegawai'] = auth()->user();
        return view('kepegawaian.izin.index', $data);
    }

    // public function show(Izin $izin)
    // {
    //     $data['list_izin'] = Izin::where('id', $izin->id)->get();
    //     return view('kepegawaian.izin.izin_detail', $data);
    // }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('kepegawaian.izin.izin_detail', $data);
    }

    // public function edit(Sakit $sakit)
    // {
    //     $data['sakit'] = $sakit;
    //     return view('kepegawaian.sakit.show', $data);
    // }

    public function update(Izin $izin)
    {
        $izin->keterangan = request('keterangan');
        $izin->status = request('status');
        $izin->nip_ak = auth()->user()->nip;
        $izin->nama_ak = auth()->user()->nama;
        $izin->save();

        $data = [

            'keterangan' => request('keterangan'),
            'nama' => $izin->nama,
            'perihal' => $izin->perihal,
            'nip' => $izin->nip,
            'jabatan' => $izin->jabatan,

        ];

        $ttd = request()->user()->nama;

        $randomStr = Str::random(5);
        $output_file = $randomStr . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $izin->qr_ak = $qrlogo;
        $izin->save();

        return redirect('kepegawaian/pengajuan-selesai');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/politap.jpg');
        $isi_text = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Persetujuan Surat Izin Pada :
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
            ->setResizeToWidth(100);

        // Create generic label
        $label = Label::create($ttd)
            ->setTextColor(new Color(0, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);
        $result->saveToFile("app/SiMantapQR/kepegawaian/izin/" . $output_file);

        return "app/SiMantapQR/kepegawaian/izin/$output_file";
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
        $templateProcessor = new TemplateProcessor('word-template/Izin_pegawai.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('waktu', $izin->waktu_string);
        $templateProcessor->setValue('unitkerja', request()->user()->unitkerja->nama_unit);
        $templateProcessor->setValue('selama', $izin->selama);
        $templateProcessor->setValue('pangkat', $izin->pangkat);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
