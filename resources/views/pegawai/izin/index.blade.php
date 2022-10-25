<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pengajuan izin
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
            </div>
            <a href="{{ url('pegawai/izin/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th class="text-center" width="120px">Dokumen</th>
                    <th class="text-center" width="120px">Aksi</th>
                    <th class="text-center" width="230px">Status</th>
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
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($izin->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
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
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th class="text-center" width="120px">Dokumen</th>
                    <th class="text-center" width="120px">Aksi</th>
                    <th class="text-center" width="230px">Status</th>
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
                                <a href="" target="popup" onclick="window.open('{{ url($izin->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
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
                Pengajuan Ditolak
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th class="text-center" width="120px">Dokumen</th>
                    <th class="text-center" width="120px">Aksi</th>
                    <th class="text-center" width="230px">Status</th>
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
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($izin->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/izin" id="{{ $izin->id }}" />
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
    </div>
</x-module.pegawai>