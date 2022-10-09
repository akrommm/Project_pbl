<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Kinerja
        </h5>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <a href="{{ url('pegawai/absensi/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            <div class="card-title">
                Absensi
            </div>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-striped table-bordered">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Status</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="superadmin/master-data/pegawai" id="" />
                                <x-template.button.edit-button url="superadmin/master-data/pegawai" id="" />
                                <x-template.button.delete-button url="superadmin/master-data/pegawai" id="" />
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>