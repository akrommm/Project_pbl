<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Rekap Absensi
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('pegawai/absensi/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Rekap Absen</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th width="90px" class="text-center" style="color: white;">Aksi</th>
                    <th class="text-center" style="color: white;">Data Absensi Bulan</th>
                    <th class="text-center" style="color: white;">Jumlah Kehadiran</th>
                    <th class="text-center" style="color: white;">Persentase Kehadiran</th>
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