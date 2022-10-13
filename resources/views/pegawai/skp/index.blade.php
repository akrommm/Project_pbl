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
                    <th class="text-center">Tahun</th>
                    <th class="text-center">Nilai</th>
                    <th class="text-center" width="120px">Dokumen</th>
                    <th class="text-center" width="120px">Aksi</th>
                    <th class="text-center" width="230px">Status</th>
                </thead>
                <tbody>
                    @foreach ($list_skp as $skp)
                    @if ($pegawai->id == $skp->id_pegawai)
                    <tr>
                        <td class="text-center">{{ $skp->tahun }}</td>
                        <td>
                            Pelayanan : {{ $skp->orientasi_pelayanan}} |
                            Kerja Sama : {{ $skp->kerja_sama}} |
                            Inisiatif Kerja : {{ $skp->inisiatif_kerja}} |
                            Kepemimpinan : {{ $skp->kepemimpinan}}
                            Komitmen : {{ $skp->komitmen}} |
                            Sasaran Kerja : {{$skp->sasaran_kerja}}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($skp->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="admin/master-data/pegawai" id="{{ $pegawai->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($skp->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($skp->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($skp->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
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