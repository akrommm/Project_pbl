<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Pegawai
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('admin/master-data/unitkerja/add-role') }}" method="post">
                        @csrf
                        <input type="hidden" name="id_unitkerja" value="{{ $unitkerja->id }}">
                        <div class="form-group">
                            <label for="" class="control-label">Pegawai</label>
                            <select class="form-control select2bs4" class="" name="id_pegawai" style="width: 100%;">
                                <option selected="selected">Pilih Nama Pegawai</option>
                                @foreach ($list_pegawai as $pegawai)
                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                @endforeach
                            </select>
                            <!-- <select name="id_pegawai" class="form-control">
                                @foreach ($list_pegawai as $pegawai)
                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                @endforeach
                            </select> -->
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark float-right"><i class="far fa-save"> Simpan</i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <hr>
                    <table class="table table-bordered table-striped">
                        <thead class="bg-dark">
                            <th width="10px">No</th>
                            <th width="100px">Aksi</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                        </thead>
                        <tbody>
                            @foreach ($unitkerja->role as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ url('admin/master-data/unitkerja/delete-role', $role->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"> Hapus</i></a>
                                </td>
                                <td>{{ $role->pegawai->nip }}</td>
                                <td>{{ $role->pegawai->nama }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>