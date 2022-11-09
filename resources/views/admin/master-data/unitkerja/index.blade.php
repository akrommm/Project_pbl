<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> UNIT KERJA
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <a href="{{ url('admin/master-data/unitkerja/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th width="10px" class="text-center" style="color: white;">NO</th>
                    <th width="90px" class="text-center" style="color: white;">AKSI</th>
                    <th class="text-center" style="color: white;">NAMA UNIT KERJA</th>
                    <th width="180px" class="text-center" style="color: white;">JUMLAH PEGAWAI</th>
                </thead>
                <tbody>
                    @foreach ($list_unitkerja->sortByDesc('created_at')->values() as $unitkerja)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/master-data/unitkerja" id="{{ $unitkerja->id }}" />
                                <x-template.button.edit-button url="admin/master-data/unitkerja" id="{{ $unitkerja->id }}" />
                                <x-template.button.delete-button url="admin/master-data/unitkerja" id="{{ $unitkerja->id }}" />
                            </div>
                        </td>
                        <td>{{ $unitkerja->nama_unit }}</td>
                        <td class="text-center">{{ $unitkerja->unitdetail_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>