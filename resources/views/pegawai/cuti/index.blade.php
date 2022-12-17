<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PENGAJUAN CUTI
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">
                Form ini digunakan untuk mengajukan cuti.
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('pegawai/cuti/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th class="text-center" style="color: white;">PERIODE</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($pegawai->id == $cuti->id_pegawai)
                    @if ($cuti->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.edit-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.delete-button url="pegawai/cuti" id="{{$cuti->id}}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $cuti->jenis_cuti}}</td>
                        <td class="text-center">{{ $cuti->dari_tanggal_string }} - {{ $cuti->sampai_tanggal_string }}</td>
                        <td class="text-center">
                            @if ($cuti->status == 1)
                            <h4><span class="badge badge-warning">Diproses...</span></h4>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN AKTIF
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th class="text-center" style="color: white;">PERIODE</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($pegawai->id == $cuti->id_pegawai)
                    @if ($cuti->status_kj == 'PERUBAHAN' || $cuti->status_kj == 'DITANGGUHKAN' || $cuti->status_kj == 'TIDAK DISETUJUI' || $cuti->status_ak == 'PERUBAHAN' || $cuti->status_ak == 'DITANGGUHKAN' || $cuti->status_kj == 'SETUJUI')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/pengajuan-aktif" id="{{$cuti->id}}" />
                                <x-template.button.edit-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.delete-button url="pegawai/cuti" id="{{$cuti->id}}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $cuti->jenis_cuti }}</td>
                        <td class="text-center">{{ $cuti->dari_tanggal_string }} - {{ $cuti->sampai_tanggal_string }}</td>
                        <td class="text-center">
                            @if ($cuti->status_kj == 'SETUJUI')
                            <h4><span class="badge badge-success">Disetujui Ketua Jurusan</span></h4>
                            @endif

                            @if ($cuti->status_kj == 'PERUBAHAN')
                            <h4><span class="badge badge-warning">PERUBAHAN</span></h4>
                            @endif

                            @if ($cuti->status_kj == 'DITANGGUHKAN')
                            <h4><span class="badge badge-primary">DITANGGUHKAN Ketua Jurusan</span></h4>
                            @endif

                            @if ($cuti->status_kj == 'TIDAK DISETUJUI')
                            <h4><span class="badge badge-danger">Tidak Disetujui Ketua Jurusan</span></h4>
                            @endif

                            @if ($cuti->status_ak == 'DITANGGUHKAN')
                            <h4><span class="badge badge-primary">DITANGGUHKAN Admin Kepegawaian</span></h4>
                            @endif

                            @if ($cuti->status_ak == 'PERUBAHAN')
                            <h4><span class="badge badge-warning">PERUBAHAN</span></h4>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN SELESAI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th class="text-center" style="color: white;">PERIODE</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($cuti->id_unitkerja == $pegawai->id_unitkerja)
                    @if ($cuti->status_ak == 'SETUJUI.' || $cuti->status_ak == 'TIDAK DISETUJUI.')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/pengajuan-selesai" id="{{$cuti->id}}" />
                                <x-template.button.edit-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.delete-button url="pegawai/cuti" id="{{$cuti->id}}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $cuti->jenis_cuti }}</td>
                        <td class="text-center">{{ $cuti->dari_tanggal_string }} - {{ $cuti->sampai_tanggal_string }}</td>
                        <td class="text-center">
                            @if ($cuti->status_ak == 'SETUJUI.')
                            <h4><span class="badge badge-success">Disetujui Admin Kepegawaian</span></h4>
                            @endif

                            @if ($cuti->status_ak == 'TIDAK DISETUJUI.')
                            <h4><span class="badge badge-danger">Tidak Disetujui Admin Kepegawaian</span></h4>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>