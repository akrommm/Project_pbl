<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tambah Unit Kerja
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/master-data/module" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Unit Kerja
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/unitkerja') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Unit Kerja</label>
                            @if ($errors->has('nama_unit'))
                            <label for="" class="label text-danger">{{ $errors->get('nama_unit')[0] }}</label>
                            @endif
                            <input type="text" name="nama_unit" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>