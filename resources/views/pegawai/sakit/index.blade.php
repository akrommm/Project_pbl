<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pengajuan Sakit
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">
                Form ini digunakan untuk mengajukan surat sakit.
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('pegawai/sakit/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th class="text-center" style="color: white;" width="120px">Dokumen</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_sakit as $sakit)
                    @if ($pegawai->id == $sakit->id_pegawai)
                    @if ($sakit->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($sakit->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/sakit" id="{{ $sakit->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($sakit->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($sakit->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($sakit->status == 3)
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
                    <th class="text-center" style="color: white;" width="120px">Dokumen</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_sakit as $sakit)
                    @if ($pegawai->id == $sakit->id_pegawai)
                    @if ($sakit->status == 2)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($sakit->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/sakit" id="{{ $sakit->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($sakit->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($sakit->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($sakit->status == 3)
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
                    <th class="text-center" style="color: white;" width="120px">Dokumen</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_sakit as $sakit)
                    @if ($pegawai->id == $sakit->id_pegawai)
                    @if ($sakit->status == 3)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($sakit->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/sakit" id="{{ $sakit->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($sakit->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($sakit->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($sakit->status == 3)
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