<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DATA MODULE
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <a href="{{ url('admin/master-data/module/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Module</a>
            <table id="data-table" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width="10px">NO</th>
                    <th style="color: white;" width="90px" class="text-center">AKSI</th>
                    <th style="color: white;">NAMA MODULE</th>
                    <th style="color: white;">TAG</th>
                    <th style="color: white;" class="text-center">JUMLAH PEGAWAI</th>
                </thead>
                <tbody>
                    @foreach ($list_module->sortByDesc('created_at')->values() as $module)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/master-data/module" id="{{ $module->id }}" />
                                <x-template.button.edit-button url="admin/master-data/module" id="{{ $module->id }}" />
                                <x-template.button.delete-button url="admin/master-data/module" id="{{ $module->id }}" />
                            </div>
                        </td>
                        <td>{{ $module->name }}</td>
                        <td>{{ $module->tag }}</td>
                        <td class="text-center">{{ $module->role_count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>