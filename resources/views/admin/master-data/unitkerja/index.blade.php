<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Unit Kerja
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <div class="card-title">
            </div>
            <a href="{{ url('admin/master-data/unitkerja/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-datatable table-striped table-bordered">
                <thead class="bg-dark">
                    <th width="10px" class="text-center">No</th>
                    <th width="90px" class="text-center">Aksi</th>
                    <th class="text-center">Nama Unit Kerja</th>
                    <th width="180px" class="text-center">Jumlah Pegawai</th>
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