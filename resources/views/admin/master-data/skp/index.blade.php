<x-module.admin>
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
            <a href="{{ url('admin/master-data/skp') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th width="120px">Preview</th>
                    <th>SKP</th>
                    <th width="260px">Status</th>
                    <th width="200px">Aksi</th>
                </thead>
                <tbody>
                    @foreach ($list_skp as $skp)
                    @if ($skp->status == 1)
                    <tr>
                        <td>
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($skp->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td>{{ $skp->skp }}</td>
                        <td>
                            @if ($skp->status == 1)
                            <p>Pengajuan Baru</p>
                            @endif

                            @if ($skp->status == 2)
                            <p>Pengajuan Diterima</p>
                            @endif

                            @if ($skp->status == 3)
                            <p>Pengajuan Ditolak</p>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <form action="{{ url('setuju', $skp->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-success"><span class="fa fa-check"></span> Setuju</button>
                                </form>
                                <form action="{{ url('tolak', $skp->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-danger"><span class="fa fa-times"></span> Tolak</button>
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
</x-module.admin>