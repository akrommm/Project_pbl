<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH UNIT KERJA
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/master-data/module" />
    <div class="card">
        <div class="card-body">
            <form action="{{ url('admin/master-data/unitkerja') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NAMA UNIT KERJA</label>
                            @if ($errors->has('nama_unit'))
                            <label for="" class="label text-danger">{{ $errors->get('nama_unit')[0] }}</label>
                            @endif
                            <input type="text" name="nama_unit" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-tone float-right"><i class="far fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>