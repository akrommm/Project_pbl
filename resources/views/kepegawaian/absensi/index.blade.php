<x-module.kepegawaian>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> REKAPAN ABSENSI
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th width="90px" class="text-center" style="color: white;">AKSI</th>
                    <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                    <th class="text-center" style="color: white;">UNIT KERJA</th>
                    <th class="text-center" style="color: white;">REKAPAN BULAN</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_absensi->sortByDesc('created_at')->values() as $absensi)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kepegawaian/absensi', $absensi->id) }}" class="btn btn-primary btn-tone"><i class="fa fa-eye"></i> Detail</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $absensi->pegawai->nama }}, {{ $absensi->pegawai->gelar_belakang}}</td>
                        <td class="text-center">{{ $absensi->pegawai->unitkerja->nama_unit }}</td>
                        <td class="text-center">
                            {{$absensi->bulan}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-module.kepegawaian>