<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Rekap Absensi
        </h5>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <a href="{{ url('kajur/absensi/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Rekap Absen</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width="10px">No</th>
                    <th style="color: white;" width="90px">Aksi</th>
                    <th style="color: white;">Nama</th>
                    <th style="color: white;">Jabatan</th>
                    <th style="color: white;">Jumlah Kehadiran</th>
                    <th style="color: white;">Persentase Kehadiran</th>
                </thead>
                <tbody>
                    @foreach ($list_absensi->sortByDesc('created_at')->values() as $absensi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="kajur/absensi" id="{{ $absensi->id}}" />
                                <x-template.button.edit-button url="kajur/absensi" id="{{ $absensi->id}}" />
                                <x-template.button.delete-button url="kajur/absensi" id="{{ $absensi->id}}" />
                            </div>
                        </td>
                        <td>{{ $absensi->nama }}</td>
                        <td>{{ $absensi->jabatan }}</td>
                        <td>{{ $absensi->jumlah_kehadiran }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-module.kajur>