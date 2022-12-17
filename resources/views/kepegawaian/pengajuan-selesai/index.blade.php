<x-module.kepegawaian>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PENGAJUAN SELESAI
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN IZIN SELESAI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">NO</th>
                    <th width="170px " class="text-center" style="color: white;">AKSI</th>
                    <th width="100px " class="text-center" style="color: white;">NIP/NIK</th>
                    <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                    <th class="text-center" style="color: white;">PERIHAL</th>
                    <th width="190px " class="text-center" style="color: white;">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($izin->status == 'Menyetujui' || $izin->status == 'Tidak Menyetujui')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kepegawaian/pengajuan-selesai', $izin->id) }}" class="btn btn-primary btn-tone"><i class="fa fa-eye"></i> Detail</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}},{{ $izin->pegawai->gelar_belakang }} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">
                            @if ($izin->status == 'Menyetujui')
                            <h4><span class="badge badge-success">Disetujui</span></h4>
                            @endif

                            @if ($izin->status == 'Tidak Menyetujui')
                            <h4><span class="badge badge-danger">Tidak Disetujui</span></h4>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN CUTI SELESAI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">NO</th>
                    <th width="170px " class="text-center" style="color: white;">AKSI</th>
                    <th width="100px " class="text-center" style="color: white;">NIP/NIK</th>
                    <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th width="190px " class="text-center" style="color: white;">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($cuti->status_ak == 'SETUJUI.' || $cuti->status_ak == 'PERUBAHAN.' || $cuti->status_ak == 'DITANGGUHKAN.' || $cuti->status_ak == 'TIDAK DISETUJUI.')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kepegawaian/pengajuan-selesai1', $cuti->id) }}" class="btn btn-primary btn-tone"><i class="fa fa-eye"></i> Detail</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $cuti->nip }}</td>
                        <td class="text-center">{{ $cuti->nama}} </td>
                        <td class="text-center">{{ $cuti->jenis_cuti }}</td>
                        <td class="text-center">
                            @if ($cuti->status_ak == 'PERUBAHAN.')
                            <h4><span class="badge badge-warning">Perubahan</span></h4>
                            @endif

                            @if ($cuti->status_ak == 'SETUJUI.')
                            <h4><span class="badge badge-success">Disetujui</span></h4>
                            @endif

                            @if ($cuti->status_ak == 'TIDAK DISETUJUI.')
                            <h4><span class="badge badge-danger">Tidak Disetujui</span></h4>
                            @endif

                            @if ($cuti->status_ak == 'DITANGGUHKAN.')
                            <h4><span class="badge badge-primary">Ditangguhkan</span></h4>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN IZIN PERJALANAN DINAS SELESAI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">NO</th>
                    <th width="170px " class="text-center" style="color: white;">AKSI</th>
                    <th width="100px " class="text-center" style="color: white;">NIP/NIK</th>
                    <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                    <th class="text-center" style="color: white;">PERIHAL</th>
                    <th width="190px " class="text-center" style="color: white;">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_dinas as $dinas)
                    @if ($dinas->status == 'Menyetujui' || $dinas->status == 'Tidak Menyetujui')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kepegawaian/pengajuan-selesai1', $dinas->id) }}" class="btn btn-primary btn-tone"><i class="fa fa-eye"></i> Detail</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $dinas->nip }}</td>
                        <td class="text-center">{{ $dinas->nama}}, {{$dinas->pegawai->gelar_belakang}} </td>
                        <td class="text-center">{{ $dinas->perihal }}</td>
                        <td class="text-center">
                            @if ($dinas->status == 'Menyetujui')
                            <h4><span class="badge badge-success">Disetujui</span></h4>
                            @endif

                            @if ($dinas->status == 'Tidak Menyetujui')
                            <h4><span class="badge badge-danger">Tidak Disetujui</span></h4>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.kepegawaian>