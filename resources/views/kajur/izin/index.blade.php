<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PENGAJUAN BARU
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                PENGAJUAN CUTI BARU
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;" class="text-center">No</th>
                    <th width="100px" class="text-center" style="color: white;">AKSI</th>
                    <th width="170px " class="text-center" style="color: white;">UNIT KERJA</th>
                    <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                    <th width="200px" class="text-center" style="color: white;">JENIS CUTI</th>
                    <th width="190px " class="text-center" style="color: white;">STATUS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_cuti as $cuti)
                    @if ($pegawai->id_unitkerja == $cuti->id_unitkerja)
                    @if ($cuti->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ url('kajur/cuti', $cuti->id) }}" class="btn btn-primary btn-tone"><i class="fa fa-eye"></i> Detail</a>
                            </div>
                        </td>
                        <td class="text-center">{{ $cuti->pegawai->unitkerja->nama_unit }}</td>
                        <td class="text-center">{{ $cuti->nama}}, {{ $cuti->pegawai->gelar_belakang }} </td>
                        <td class="text-center">{{ $cuti->jenis_cuti }}</td>
                        <td class="text-center">
                            @if ($cuti->status == 1)
                            <h4><span class="badge badge-warning">Pengajuan Baru</span></h4>
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
</x-module.kajur>