<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PENGAJUAN IZIN PERJALANAN DINAS LUAR
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">
                Form ini digunakan untuk mengajukan pengajuan izin dinas luar.
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('pegawai/dinas/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">PERIHAL</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_dinas as $dinas)
                    @if ($pegawai->id == $dinas->id_pegawai)
                    @if ($dinas->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                                <x-template.button.edit-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                                <x-template.button.delete-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $dinas->perihal }}</td>
                        <td class="text-center">
                            @if ($dinas->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($dinas->status == 2)
                            <label class="btn btn-success">Disetujui Ketua Jurusan</label>
                            @endif

                            @if ($dinas->status == 3)
                            <label class="btn btn-success">Disetujui Admin Kepegawaian</label>
                            @endif

                            @if ($dinas->status == 4)
                            <label class="btn btn-danger">Ditolak Ketua Jurusan</label>
                            @endif

                            @if ($dinas->status == 5)
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
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">PERIHAL</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_dinas as $dinas)
                    @if ($pegawai->id == $dinas->id_pegawai)
                    @if ($dinas->status == '2' || $dinas->status == '3')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                                <x-template.button.edit-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                                <x-template.button.delete-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                            </div>
                        </td>
                        <td class="text-center">Izin Perjalanan Dinas Luar</td>
                        <td class="text-center">
                            @if ($dinas->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($dinas->status == 2)
                            <label class="btn btn-success">Disetujui Ketua Jurusan</label>
                            @endif

                            @if ($dinas->status == 3)
                            <label class="btn btn-success">Disetujui Admin Kepegawaian</label>
                            @endif

                            @if ($dinas->status == 4)
                            <label class="btn btn-danger">Ditolak Ketua Jurusan</label>
                            @endif

                            @if ($dinas->status == 5)
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
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">PERIHAL</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_dinas as $dinas)
                    @if ($pegawai->id == $dinas->id_pegawai)
                    @if ($dinas->status == '4' || $dinas->status == '5')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                                <x-template.button.edit-button url="pegawai/dinas" id="{{ $dinas->id }}" />
                                <x-template.button.delete-button url="pegawai/dinas" id="{{$dinas->id}}" />
                            </div>
                        </td>
                        <td class="text-center">Izin Perjalanan Dinas Luar</td>
                        <td class="text-center">
                            @if ($dinas->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($dinas->status == 2)
                            <label class="btn btn-success">Disetujui Ketua Jurusan</label>
                            @endif

                            @if ($dinas->status == 3)
                            <label class="btn btn-success">Disetujui Admin Kepegawaian</label>
                            @endif

                            @if ($dinas->status == 4)
                            <label class="btn btn-danger">Ditolak Ketua Jurusan</label>
                            @endif

                            @if ($dinas->status == 5)
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
</x-module.pegawai>