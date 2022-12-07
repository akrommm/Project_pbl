<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PENGAJUAN AKTIF
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN CUTI AKTIF
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">NO</th>
                    <th width="170px " class="text-center" style="color: white;">AKSI</th>
                    <th width="100px " class="text-center" style="color: white;">NIP/NIK</th>
                    <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                    <th class="text-center" style="color: white;">PERIHAL</th>
                    <th width="190px " class="text-center" style="color: white;">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($cuti->status == 2)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kajur/pengajuan-aktif', $cuti->id) }}" class="btn btn-primary btn-tone"><i class="fa fa-eye"> Detail</i></a>
                            </div>
                        </td>
                        <td class="text-center">{{ $cuti->nip }}</td>
                        <td class="text-center">{{ $cuti->nama}} </td>
                        <td class="text-center">{{ $cuti->perihal }}</td>
                        <td class="text-center">
                            @if ($cuti->status == 1)
                            <h4><span class="badge badge-warning">Pengajuan Baru</span></h4>
                            @endif

                            @if ($cuti->status == 2)
                            <h4><span class="badge badge-success">Disetujui Ketua Jurusan</span></h4>
                            @endif

                            @if ($cuti->status == 4)
                            <h4><span class="badge badge-danger">Pengajuan Ditolak</span></h4>
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