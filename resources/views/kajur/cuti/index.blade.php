<x-module.kajur>
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
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th class="text-center" style="color: white;">PERIODE</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($pegawai->id_unitkerja == $cuti->id_unitkerja)
                    @if ($cuti->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $cuti->jenis_cuti}}</td>
                        <td class="text-center">{{ $cuti->dari_tanggal_string }} - {{ $cuti->sampai_tanggal_string }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.edit-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.delete-button url="pegawai/cuti" id="{{$cuti->id}}" />
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($cuti->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($cuti->status == 2)
                            <label class="btn btn-success">Disetujui Ketua Jurusan</label>
                            @endif

                            @if ($cuti->status == 3)
                            <label class="btn btn-success">Disetujui Admin Kepegawaian</label>
                            @endif

                            @if ($cuti->status == 4)
                            <label class="btn btn-danger">Ditolak Ketua Jurusan</label>
                            @endif

                            @if ($cuti->status == 5)
                            <label class="btn btn-danger">Ditolak Admin Kepegawaian</label>
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
                PENGAJUAN DISETUJUI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th class="text-center" style="color: white;">PERIODE</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($pegawai->id == $cuti->id_pegawai)
                    @if ($cuti->status == '2' || $cuti->status == '3')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.edit-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.delete-button url="pegawai/cuti" id="{{$cuti->id}}" />
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($cuti->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($cuti->status == 2)
                            <label class="btn btn-success">Disetujui Ketua Jurusan</label>
                            @endif

                            @if ($cuti->status == 3)
                            <label class="btn btn-success">Disetujui Admin Kepegawaian</label>
                            @endif

                            @if ($cuti->status == 4)
                            <label class="btn btn-danger">Ditolak Ketua Jurusan</label>
                            @endif

                            @if ($cuti->status == 5)
                            <label class="btn btn-danger">Ditolak Admin Kepegawaian</label>
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
                PENGAJUAN DITOLAK
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;">JENIS CUTI</th>
                    <th class="text-center" style="color: white;">PERIODE</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($pegawai->id == $cuti->id_pegawai)
                    @if ($cuti->status == '4' || $cuti->status == '5')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.edit-button url="pegawai/cuti" id="{{$cuti->id}}" />
                                <x-template.button.delete-button url="pegawai/cuti" id="{{$cuti->id}}" />
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($cuti->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($cuti->status == 2)
                            <label class="btn btn-success">Disetujui Ketua Jurusan</label>
                            @endif

                            @if ($cuti->status == 3)
                            <label class="btn btn-success">Disetujui Admin Kepegawaian</label>
                            @endif

                            @if ($cuti->status == 4)
                            <label class="btn btn-danger">Ditolak Ketua Jurusan</label>
                            @endif

                            @if ($cuti->status == 5)
                            <label class="btn btn-danger">Ditolak Admin Kepegawaian</label>
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
</x-module.kajur>