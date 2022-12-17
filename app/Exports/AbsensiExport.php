<?php

namespace App\Exports;

use App\Models\Pegawai\Absensi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpParser\Node\Expr\FuncCall;

class AbsensiExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Absensi::select('nama', 'nip', 'jabatan', 'jumlah_kerja', 'jumlah_kehadiran', 'jumlah_alfa', 'jumlah_izin', 'jumlah_sakit')->get();
    }

    public function headings(): array
    {
        return ["NAMA", "NIP", "JABATAN", "JUMLAH KERJA", "JUMLAH HADIR", "JUMLAH ALFA", "JUMLAH IZIN", "JUMLAH SAKIT"];
    }
}
