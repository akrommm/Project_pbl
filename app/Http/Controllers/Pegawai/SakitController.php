<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PengajuanSakit\Sakit;
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

class SakitController extends Controller
{
    public function index()
    {
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.sakit.index', $data);
    }

    public function create()
    {
        return view('pegawai.sakit.create');
    }

    public function show(Sakit $sakit)
    {
        $data['sakit'] = $sakit;
        return view('pegawai.sakit.show', $data);
    }

    public function store()
    {
        $sakit = new Sakit();
        $sakit->id_pegawai = request()->user()->id;
        $sakit->id_unitkerja = request()->user()->unitkerja->id;
        $sakit->perihal = request('perihal');
        $sakit->lampiran = request('lampiran');
        $sakit->dari_tanggal = request('dari_tanggal');
        $sakit->sampai_tanggal = request('sampai_tanggal');
        $sakit->nama = request()->user()->nama;
        $sakit->nip = request()->user()->nip;
        $sakit->jabatan = request()->user()->jabatan;
        $sakit->qr = request('qr');
        $sakit->status = 1;
        $sakit->save();

        $sakit->handleUploadLampiran();

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
        $randomStr = Str::random(5);
        $output_file = $randomStr . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $sakit->qr = $qrlogo;
        $sakit->save();

        return redirect('pegawai/sakit')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/inim.png');
        $isi_text = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Pengajuan Surat Izin Sakit Pada :
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
        $result->saveToFile("app/SiMantapQR/pegawai/sakit/" . $output_file);

        return "app/SiMantapQR/pegawai/sakit/$output_file";
    }

    function destroy(sakit $sakit)
    {
        $sakit->handleDelete();
        $sakit->handleDeleteKajur();
        $sakit->handleDeleteKepegawaian();
        $sakit->handleDeleteLampiran();
        $sakit->delete();
        return redirect('pegawai/sakit')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

    public function wordExport($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit/sakit_pegawai.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('dari_tanggal', $sakit->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $sakit->sampai_tanggal_string);
        $qrdata = ["path" => $sakit->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $sakit->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $fileName = $sakit->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport2($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit_kajur.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
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

    public function wordExport3($id)
    {
        $sakit = sakit::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/sakit_kepegawaian.docx');
        $templateProcessor->setValue('nama', $sakit->nama);
        $templateProcessor->setValue('nip', $sakit->nip);
        $templateProcessor->setValue('jabatan', $sakit->jabatan);
        $templateProcessor->setValue('perihal', $sakit->perihal);
        $templateProcessor->setValue('dari_tanggal', $sakit->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $sakit->sampai_tanggal_string);
        $qrdata = ["path" => $sakit->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $sakit->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', ["path" => $sakit->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $sakit->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $sakit->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
