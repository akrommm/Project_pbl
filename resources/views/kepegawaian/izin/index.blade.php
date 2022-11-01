<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Pengajuan izin
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
            <a href="{{ url('kajur/izin') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
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
                    @foreach ($list_izin as $izin)
                    @if ($izin->status == 2)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $izin->nip }}</td>
                        <td>{{ $izin->nama}} </td>
                        <td class="text-center">
                            @if ($izin->status == 1)
                            <label class="btn btn-warning">Pengajuan Izin</label>
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
                                <a href="{{ url('cetak_izin', $izin->id) }}" class="btn btn-dark" target="_blank"><i class="far fa-file-pdf"></i></a>
                                <form action="{{ url('setuju', $izin->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success"><span class="fa fa-check"></span></button>
                                </form>
                                <form action="{{ url('tolak', $izin->id) }}" method="post">
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
    </div>
</x-module.kajur>