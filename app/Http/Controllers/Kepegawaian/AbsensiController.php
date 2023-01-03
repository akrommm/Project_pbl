<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\Kepegawaian\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
        $data['list_absensi'] = Absensi::all();
        $data['pegawai'] = auth()->user();
        return view('kepegawaian.absensi.index', $data);
    }

    public function show(Absensi $absensi)
    {
        $data['absensi'] = $absensi;
        return view('kepegawaian.absensi.show', $data);
    }

    public function absensiexport($id)
    {
        // return Excel::download(new AbsensiExport, 'users.xlsx');
        $absensi = Absensi::findOrFail($id);
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('excel-template/ini.xlsx');
        $worksheet = $spreadsheet->getSheet(0);
        $worksheet->getCell('C3')->setValue($absensi->nama);
        $worksheet->getCell('C4')->setValue(request()->user()->unitkerja->nama_unit);
        $worksheet->getCell('C5')->setValue($absensi->bulan);
        $worksheet->getCell('A9')->setValue($absensi->nama);
        $worksheet->getCell('B9')->setValue($absensi->golongan->jabatan);
        $worksheet->getCell('C9')->setValue($absensi->jumlah_kerja);
        $worksheet->getCell('D9')->setValue($absensi->jumlah_kehadiran);
        $worksheet->getCell('A6')->setValue('Uang Makan Harian');
        $worksheet->getCell('C6')->setValue($absensi->golongan->uang_makan);
        $worksheet->getCell('G8')->setValue('Uang Makan');
        $worksheet->getCell('G9')->setValue('=D9*C6');
        $worksheet->getCell('E9')->setValue('=D9/C9*100');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
        $file_name = $absensi->nama . ".xlsx";
        $writer->save($file_name);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . urlencode($file_name) . '"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
