<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PengajuanIzin\Izin;
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

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.izin.index', $data);
    }

    public function create()
    {
        return view('pegawai.izin.create');
    }

    public function store()
    {
        $izin = new izin();
        $izin->id_pegawai = request()->user()->id;
        $izin->id_unitkerja = request()->user()->unitkerja->id;
        $izin->perihal = request('perihal');
        $izin->pangkat = request('pangkat');
        $izin->alasan = request('alasan');
        $izin->waktu = request('waktu');
        $izin->selama = request('selama');
        $izin->nama = request()->user()->nama;
        $izin->nip = request()->user()->nip;
        $izin->jabatan = request()->user()->jabatan;
        $izin->status = 1;
        $izin->save();

        $data = [
            'nomor_surat' =>  request('nomor_surat'),
            'tanggal_surat' => request('tanggal_surat'),
            'tanggal' => $izin->created_at_string,
            'keterangan' => request('keterangan'),
            'nama' => $izin->nama,
            'waktu' => $izin->waktu_string,
            'selama' => $izin->selama,
            'nip' => $izin->nip,
            'jabatan' => $izin->jabatan,
            'pangkat' => $izin->pangkat,

        ];

        $ttd = request()->user()->nama;

        $randomStr = Str::random(5);
        $output_file = $randomStr . ".png";

        $qrlogo = $this->generateQrcode($output_file, $data, $ttd);
        $izin->qr = $qrlogo;
        $izin->save();


        return redirect('pegawai/izin')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/politap.jpg');
        $isi_text = "
Digital Signature
" . request()->user()->nama . "
NIP/NIK. " . request()->user()->nip . "
        
        
Tanda Tangan Digital untuk Pengajuan Surat Izin Pada :
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
        $result->saveToFile("app/SiMantapQR/pegawai/izin/" . $output_file);

        return "app/SiMantapQR/pegawai/izin/$output_file";
    }

    public function update(Izin $izin)
    {
        $izin->komen = request('komen');
        $izin->status = request('status');
        $izin->save();

        $izin->handleUploadFile();

        return redirect('pegawai/izin');
    }

    public function show(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('pegawai.izin.show', $data);
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('pegawai.izin.izin_detail', $data);
    }

    function destroy(Izin $izin)
    {
        $izin->handleDelete();
        $izin->handleDeleteKajur();
        $izin->handleDeleteKepegawaian();
        $izin->delete();
        return redirect('pegawai/izin')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

    public function wordExport($id)
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

    public function wordExport2($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kajur.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('nama_kj', $izin->nama_kj);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('waktu', $izin->waktu_string);
        $templateProcessor->setValue('selama', $izin->selama);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function wordExport3($id)
    {
        $izin = Izin::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/Izin_kepegawaian.docx');
        $templateProcessor->setValue('nama', $izin->nama);
        $templateProcessor->setValue('alasan', $izin->alasan);
        $templateProcessor->setValue('nip', $izin->nip);
        $templateProcessor->setValue('jabatan', $izin->jabatan);
        $templateProcessor->setValue('perihal', $izin->perihal);
        $templateProcessor->setValue('waktu', $izin->waktu_string);
        $templateProcessor->setValue('selama', $izin->selama);
        $qrdata = ["path" => $izin->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
        $templateProcessor->setImageValue('qr_kj', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $templateProcessor->setImageValue('qr_ak', ["path" => $izin->qr_kj, 'width' => 100, 'height' => 100, 'ratio' => false]);
        $fileName = $izin->nama;
        $templateProcessor->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
