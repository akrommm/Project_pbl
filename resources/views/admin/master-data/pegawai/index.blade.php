<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA PEGAWAI
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/master-data/pegawai/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;">NAMA PEGAWAI</th>
                    <th style=" color: white;">JABATAN</th>
                </thead>
                <tbody>
                    @foreach ($list_pegawai->sortByDesc('created_at')->values() as $pegawai)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/master-data/pegawai" id="{{ $pegawai->id }}" />
                                <x-template.button.edit-button url="admin/master-data/pegawai" id="{{ $pegawai->id }}" />
                                <x-template.button.delete-button url="admin/master-data/pegawai" id="{{ $pegawai->id }}" />
                            </div>
                        </td>
                        <td>{{ $pegawai->nama }}, {{$pegawai->gelar_belakang}}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>