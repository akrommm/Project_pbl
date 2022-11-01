<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pengajuan izin
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">
                Form ini digunakan untuk mengajukan surat izin dan cuti.
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('pegawai/izin/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th class="text-center" style="color: white;">Perihal</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($pegawai->id == $izin->id_pegawai)
                    @if ($izin->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.edit-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($izin->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($izin->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
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
                Pengajuan Disetujui
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th class="text-center" style="color: white;">Perihal</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
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
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.edit-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <h4><span class="badge badge-warning">Tunggu</span></h4>
                            @endif

                            @if ($izin->status == 2)
                            <h4><span class="badge badge-success">Disetujui</span></h4>
                            @endif

                            @if ($izin->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
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
                Pengajuan Ditolak
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th class="text-center" style="color: white;">Perihal</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($pegawai->id == $izin->id_pegawai)
                    @if ($izin->status == 3)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.edit-button url="pegawai/izin" id="{{ $izin->id }}" />
                                <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($izin->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($izin->status == 3)
                            <h4><span class="badge badge-danger">Ditolak</span></h4>
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