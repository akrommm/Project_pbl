<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pengajuan Sakit
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Pengajuan Baru
            </div>

        </div>
        <div class="card-body">
            <a href="{{ url('kajur/sakit') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th width="190px " class="text-center" style="color: white;">Status</th>
                    <th width="170px " class="text-center" style="color: white;">Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_sakit as $sakit)
                    @if ($sakit->status == 1)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $sakit->nip }}</td>
                        <td>{{ $sakit->nama}} </td>
                        <td class="text-center">
                            @if ($sakit->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($sakit->status == 2)
                            <p>Pengajuan Diterima</p>
                            @endif

                            @if ($sakit->status == 3)
                            <p>Pengajuan Ditolak</p>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($sakit->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                                <form action="{{ url('setuju', $sakit->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success"><span class="fa fa-check"></span></button>
                                </form>
                                <form action="{{ url('tolak', $sakit->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-danger"><span class="fa fa-times"></span></button>
                                </form>
                            </div>
                        </td>
                    </tr>
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
                    <th style="width: 1%;color: white;" class="text-center">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th width="190px " class="text-center" style="color: white;">Status</th>
                    <th width="170px " class="text-center" style="color: white;">Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_sakit as $sakit)
                    @if ($sakit->status == 2)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $sakit->nip }}</td>
                        <td>{{ $sakit->nama}} </td>
                        <td class="text-center">
                            @if ($sakit->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($sakit->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($sakit->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($sakit->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
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
                    <th style="width: 1%;color: white;" class="text-center">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th width="190px " class="text-center" style="color: white;">Status</th>
                    <th width="170px " class="text-center" style="color: white;">Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_sakit as $sakit)
                    @if ($sakit->status == 3)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $sakit->nip }}</td>
                        <td>{{ $sakit->nama}} </td>
                        <td class="text-center">
                            @if ($sakit->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($sakit->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($sakit->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($sakit->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.kajur>