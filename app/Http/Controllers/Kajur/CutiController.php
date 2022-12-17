<?php

namespace App\Http\Controllers\Kajur;

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
        return view('kajur.cuti.index', $data);
    }

    public function create()
    {
        return view('kajur.cuti.create');
    }

    public function show(Cuti $cuti)
    {
        $data['cuti'] = $cuti;
        return view('kajur.cuti.show', $data);
    }

    public function update(Cuti $cuti)
    {
        $cuti->nama_kj = auth()->user()->nama;
        $cuti->keterangan = request('keterangan');
        $cuti->status_kj = request('status_kj');
        $cuti->status = 0;
        $cuti->nip_kj = auth()->user()->nip;
        $cuti->save();

        $filepath = 'word-template/Izin_kajur.docx';
        $data = [
            'nomor_surat' =>  request('nomor_surat'),
            'tanggal_surat' => request('tanggal_surat'),
            'perihal' => $cuti->perihal,
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
        $cuti->qr_kj = $qrlogo;
        $cuti->save();


        return redirect('kajur/pengajuan-aktif')->with('success', 'Pengajuan Berhasil Diteruskan');
    }

    function generateQrcode($output_file, $data, $ttd)
    {
        $logo =  public_path('assets/images/logo/politap.jpg');
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
        $result->saveToFile("app/SiMantapQR/kajur/cuti/" . $output_file);

        return "app/SiMantapQR/kajur/cuti/$output_file";
    }
    function destroy(Cuti $cuti)
    {
        $cuti->handleDelete();
        $cuti->handleDeleteKajur();
        $cuti->handleDeleteKepegawaian();
        $cuti->handleDeleteLampiran();
        $cuti->delete();
        return redirect('kajur/cuti')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

    
    public function wordExport2($id)
    {
        $cuti = cuti::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/cuti/cuti_kajur.docx');
        $templateProcessor->setValue('nama', $cuti->nama);
        $templateProcessor->setValue('nama_kj', $cuti->nama_kj);
        $templateProcessor->setValue('nip_kj', $cuti->nip_kj);
        $templateProcessor->setValue('nip', $cuti->nip);
        $templateProcessor->setValue('jabatan', $cuti->jabatan);
        $templateProcessor->setValue('alasan', $cuti->alasan);
        $templateProcessor->setValue('jenis_cuti', $cuti->jenis_cuti);
        $templateProcessor->setValue('masa_kerja', $cuti->masa_kerja);
        $templateProcessor->setValue('lamanya_cuti', $cuti->lamanya_cuti);
        $templateProcessor->setValue('unitkerja', $cuti->pegawai->unitkerja->nama_unit);
        $templateProcessor->setValue('alamat', $cuti->alamat);
        $templateProcessor->setValue('pangkat', $cuti->pangkat);
        $templateProcessor->setValue('telp', $cuti->telp);
        $templateProcessor->setValue('status_kj', $cuti->status_kj);
        $templateProcessor->setValue('created_at', $cuti->created_at_string);
        $templateProcessor->setValue('keterangan', $cuti->keterangan);
        $templateProcessor->setValue('dari_tanggal', $cuti->dari_tanggal_string);
        $templateProcessor->setValue('sampai_tanggal', $cuti->sampai_tanggal_string);
        $qrdata = ["path" => $cuti->qr, 'width' => 100, 'height' => 100, 'ratio' => false];
        $templateProcessor->setImageValue('qr', $qrdata);
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
