<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PENGAJUAN IZIN
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">
                Form ini digunakan untuk mengajukan surat izin.
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('pegawai/izin/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">PERIHAL IZIN</th>
                    <th class="text-center" style="color: white;">PADA HARI</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($pegawai->id == $izin->id_pegawai)
                    @if ($izin->status == 2)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.edit-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->waktu_string }}</td>
                        <td class="text-center">
                            @if ($izin->status == 2)
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
                PENGAJUAN DISETUJUI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">PERIHAL IZIN</th>
                    <th class="text-center" style="color: white;">PADA HARI</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($pegawai->id == $izin->id_pegawai)
                    @if ($izin->status == 'Menyetujui')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.edit-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->waktu_string }}</td>
                        <td class="text-center">
                            @if ($izin->status == 'Menyetujui')
                            <h4><span class="badge badge-success">Disetujui</span></h4>
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
                PENGAJUAN TIDAK DISETUJUI
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th class="text-center" style="color: white;" width="120px">AKSI</th>
                    <th class="text-center" style="color: white;">PERIHAL IZIN</th>
                    <th class="text-center" style="color: white;">PADA HARI</th>
                    <th class="text-center" style="color: white;" width="230px">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($pegawai->id == $izin->id_pegawai)
                    @if ($izin->status == 'Tidak Menyetujui')
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.edit-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->waktu_string }}</td>
                        <td class="text-center">
                            @if ($izin->status == 'Tidak Menyetujui')
                            <h4><span class="badge badge-danger">Tidak Disetujui</span></h4>
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