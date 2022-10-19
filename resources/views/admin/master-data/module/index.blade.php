<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Data Module
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url('admin/master-data/module/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Module</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-datatable">
                <thead class="bg-dark">
                    <th width="10px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Title</th>
                    <th>Tag</th>
                    <th>Pegawai</th>
                    <th>URL</th>
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
                        <td>{{ $module->title }}</td>
                        <td>{{ $module->tag }}</td>
                        <td class="text-center">{{ $module->role_count }}</td>
                        <td>{{ $module->url }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>