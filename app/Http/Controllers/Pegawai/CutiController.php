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


class CutiController extends Controller
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

    public function show(Cuti $cuti)
    {
        $data['cuti'] = $cuti;
        return view('pegawai.cuti.show', $data);
    }

    public function store()
    {
        $cuti = new Cuti();
        $cuti->id_pegawai = request()->user()->id;
        $cuti->id_unitkerja = request()->user()->unitkerja->id;
        $cuti->masa_kerja = request('masa_kerja');
        $cuti->alasan = request('alasan');
        $cuti->jenis_cuti = request('jenis_cuti');
        $cuti->lamanya_cuti = request('lamanya_cuti');
        $cuti->alamat = request('alamat');
        $cuti->telp = request('telp');
        $cuti->dari_tanggal = request('dari_tanggal');
        $cuti->sampai_tanggal = request('sampai_tanggal');
        $cuti->nama = request()->user()->nama;
        $cuti->nip = request()->user()->nip;
        $cuti->jabatan = request()->user()->jabatan;
        $cuti->qr = request('qr');
        $cuti->status = 1;
        $cuti->save();

        $cuti->handleUploadLampiran();

        $data = [
            'nomor_surat' =>  request('nomor_surat'),
            'tanggal_surat' => request('tanggal_surat'),
            'tanggal' => $cuti->created_at_string,
            'keterangan' => request('keterangan'),
            'nama' => $cuti->nama,
            'dari_tanggal' => $cuti->dari_tanggal_string,
            'sampai_tanggal' => $cuti->sampai_tanggal_string,
            'nip' => $cuti->nip,
            'jabatan' => $cuti->jabatan,

        ];

        $ttd = request()->user()->nama;
        $randomStr = Str::random(5);
        $output_file = $randomStr . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $cuti->qr = $qrlogo;
        $cuti->save();

        return redirect('pegawai/cuti')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/politap.jpg');
        $isi_text = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Pengajuan Cuti cuti Pada :
Tanggal : " . $data['tanggal'];

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
        $result->saveToFile("app/SiMantapQR/pegawai/cuti/" . $output_file);

        return "app/SiMantapQR/pegawai/cuti/$output_file";
    }

    function destroy(Cuti $cuti)
    {
        $cuti->handleDelete();
        $cuti->handleDeleteKajur();
        $cuti->handleDeleteKepegawaian();
        $cuti->handleDeleteLampiran();
        $cuti->delete();
        return redirect('pegawai/cuti')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

    public function wordExport($id)
    {
        $cuti = cuti::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/cuti/cuti_pegawai.docx');
        $templateProcessor->setValue('nama', $cuti->nama);
        $templateProcessor->setValue('nip', $cuti->nip);
        $templateProcessor->setValue('jabatan', $cuti->jabatan);
        $templateProcessor->setValue('alasan', $cuti->alasan);
        $templateProcessor->setValue('jenis_cuti', $cuti->jenis_cuti);
        $templateProcessor->setValue('masa_kerja', $cuti->masa_kerja);
        $templateProcessor->setValue('lamanya_cuti', $cuti->lamanya_cuti);
        $templateProcessor->setValue('alamat', $cuti->alamat);
        $templateProcessor->setValue('telp', $cuti->telp);
        $templateProcessor->setValue('created_at', $cuti->created_at_string);
        $templateProcessor->setValue('dari_tanggal', $cuti->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $cuti->sampai_tanggal_string);
        $qrdata = ["path" => $cuti->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $fileName = $cuti->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport2($id)
    {
        $cuti = cuti::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/cuti_kajur.docx');
        $templateProcessor->setValue('nama', $cuti->nama);
        $templateProcessor->setValue('nip', $cuti->nip);
        $templateProcessor->setValue('jabatan', $cuti->jabatan);
        $templateProcessor->setValue('perihal', $cuti->perihal);
        $templateProcessor->setValue('dari_tanggal', $cuti->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $cuti->sampai_tanggal_string);
        $qrdata = ["path" => $cuti->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $cuti->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', ["path" => $cuti->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $cuti->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport3($id)
    {
        $cuti = cuti::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/cuti_kepegawaian.docx');
        $templateProcessor->setValue('nama', $cuti->nama);
        $templateProcessor->setValue('nip', $cuti->nip);
        $templateProcessor->setValue('jabatan', $cuti->jabatan);
        $templateProcessor->setValue('perihal', $cuti->perihal);
        $templateProcessor->setValue('dari_tanggal', $cuti->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $cuti->sampai_tanggal_string);
        $qrdata = ["path" => $cuti->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('lampiran', ["path" => $cuti->lampiran, 'width' => 600, 'height' => 400, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_kj', ["path" => $cuti->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $cuti->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $cuti->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
