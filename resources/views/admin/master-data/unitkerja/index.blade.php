<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Unit Kerja
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <div class="card-title">
                Unit Kerja
            </div>
            <a href="{{ url('admin/master-data/unitkerja/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-striped table-bordered">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Unit Kerja</th>
                    <th width="180px">Jumlah Pegawai</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/master-data/pegawai" id="" />
                                <x-template.button.edit-button url="admin/master-data/pegawai" id="" />
                                <x-template.button.delete-button url="admin/master-data/pegawai" id="" />
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>