<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pengajuan Izin
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
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">No</th>
                    <th width="100px " class="text-center" style="color: white;">NIP</th>
                    <th class="text-center" style="color: white;">Nama Pegawai</th>
                    <th class="text-center" style="color: white;">Perihal</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th width="190px " class="text-center" style="color: white;">Status</th>
                    <th width="170px " class="text-center" style="color: white;">Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($izin->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <h4><span class="badge badge-warning">Pengajuan Baru</span></h4>
                            @endif

                            @if ($izin->status == 2)
                            <p>Pengajuan Diterima</p>
                            @endif

                            @if ($izin->status == 3)
                            <p>Pengajuan Ditolak</p>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kajur/izin', $izin->id) }}/edit" class="btn btn-primary btn-tone"><i class="fa fa-eye"> Detail</i></a>
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
                    <th class="text-center" style="color: white;">Perihal</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th width="190px " class="text-center" style="color: white;">Status</th>
                    <th width="170px " class="text-center" style="color: white;">Aksi</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($izin->status == 2)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
                            @endif

                            @if ($izin->status == 2)
                            <h4><span class="badge badge-success">Disetujui</span></h4>
                            @endif

                            @if ($izin->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('cetak_izin', $izin->id) }}" class="btn btn-dark" target="_blank"><i class="fa fa-download"></i></a>
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
                    <th class="text-center" style="color: white;">Perihal</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th width="190px " class="text-center" style="color: white;">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_izin as $izin)
                    @if ($izin->status == 3)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td class="text-center">{{ $izin->nip }}</td>
                        <td class="text-center">{{ $izin->nama}} </td>
                        <td class="text-center">{{ $izin->perihal }}</td>
                        <td class="text-center">{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <label class="btn btn-warning">Pengajuan Baru</label>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.kajur>