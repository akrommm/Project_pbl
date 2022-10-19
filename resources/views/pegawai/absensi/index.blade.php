<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Rekap Absensi
        </h5>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <a href="{{ url('pegawai/absensi/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Rekap Absen</a>
            <div class="card-title">
            </div>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-striped table-bordered">
                <thead class="bg-dark">
                    <th width="10px" class="text-center">No</th>
                    <th width="90px" class="text-center">Aksi</th>
                    <th class="text-center">Data Absensi Bulan</th>
                    <th class="text-center">Jumlah Kehadiran</th>
                    <th class="text-center">Persentase Kehadiran</th>
                </thead>
                <tbody>
                    @foreach ($list_absensi->sortByDesc('created_at')->values() as $absensi)
                    @if ($pegawai->id == $absensi->id_pegawai)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="pegawai/absensi" id="{{ $absensi->id }}" />
                                <x-template.button.edit-button url="pegawai/absensi" id="{{ $absensi->id }}" />
                                <x-template.button.delete-button url="pegawai/absensi" id="{{ $absensi->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $absensi->bulan }}</td>
                        <td class="text-center">{{ $absensi->jumlah_kehadiran }} Hari</td>
                        <td class="text-center">
                            {{ number_format(($absensi->jumlah_kehadiran / 22) * 100, 2) }}
                            %
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-module.pegawai>