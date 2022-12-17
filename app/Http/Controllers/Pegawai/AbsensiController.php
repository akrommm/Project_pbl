<?php

namespace App\Http\Controllers\Pegawai;

use App\Exports\AbsensiExport;
use App\Http\Controllers\Controller;
use App\Models\Pegawai\Absensi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AbsensiController extends Controller
{
    public function index()
    {

        $data['bulan_awal'] = $bulan_awal = request('bulan_awal');
        $data['bulan_akhir'] = $bulan_akhir = request('bulan_akhir');
        $data['tahun_awal'] = $tahun_awal = request('tahun_awal');
        $data['tahun_akhir'] = $tahun_akhir = request('tahun_akhir');
        $date1 = Carbon::create($bulan_awal, 1);
        $date2 = Carbon::create($bulan_akhir)->endOfMonth();
        $weekday = $date1->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $date2);

        $data['jumlah_hari_aktif'] = $weekday;
        $data['list_absensi'] = Absensi::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.absensi.index', $data);
    }

    public function create()
    {
        return view('pegawai.absensi.create');
    }

    public function store()
    {
        $absensi = new Absensi();
        $absensi->id_pegawai = request()->user()->id;
        $absensi->id_unitkerja = request()->user()->unitkerja->id;
        $absensi->nama = request()->user()->nama;
        $absensi->jabatan = request()->user()->jabatan;
        $absensi->bulan = request('bulan');
        $absensi->nip = request()->user()->nip;
        $absensi->jumlah_kehadiran = request('jumlah_kehadiran');
        $absensi->jumlah_sakit = request('jumlah_sakit');
        $absensi->jumlah_izin = request('jumlah_izin');
        $absensi->jumlah_kerja = request('jumlah_kerja');
        $absensi->jumlah_alfa = request('jumlah_alfa');
        $absensi->save();

        return redirect('pegawai/absensi')->with('success', 'Berhasil Rekap Absensi');
    }

    public function show(Absensi $absensi)
    {
        $data['absensi'] = $absensi;
        return view('pegawai.absensi.show', $data);
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
        $worksheet->getCell('B9')->setValue($absensi->jabatan);
        $worksheet->getCell('C9')->setValue($absensi->jumlah_kerja);
        $worksheet->getCell('D9')->setValue($absensi->jumlah_kehadiran);
        $worksheet->getCell('B6')->setValue('UANG MAKAN');
        $worksheet->getCell('C6')->setValue('35000');
        $worksheet->getCell('G8')->setValue('UANG MAKAN');
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

    function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect('pegawai/absensi')->with('danger', 'Berhasil Dihapus');
    }
}
