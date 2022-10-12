<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> SKP
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                SKP
            </div>
            <a href="{{ url('pegawai/skp/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%">No</th>
                    <th width="120px">Aksi</th>
                    <th>SKP</th>
                    <th width="230px">Status</th>
                </thead>
                <tbody>
                    @foreach ($list_skp as $skp)
                    @if ($pegawai->id == $skp->id_pegawai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($skp->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td>{{ $skp->skp }}</td>
                        <td>
                            @if ($skp->status == 1)
                            <p class="btn btn-warning">Pengajuan Baru</p>
                            @endif

                            @if ($skp->status == 2)
                            <p class="btn btn-success">Pengajuan Diterima</p>
                            @endif

                            @if ($skp->status == 3)
                            <p class="btn btn-danger">Pengajuan Ditolak</p>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>