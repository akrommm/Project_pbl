<x-module.kepegawaian>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> EDIT GOLONGAN
        </h5>
    </div>

    <a href="{{ url('kepegawaian/golongan') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kepegawaian/golongan', $golongan->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JABATAN </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" class="form-control" name="jabatan" value="{{$golongan->jabatan}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">UANG MAKAN </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="number" class="form-control" name="uang_makan" value="{{$golongan->uang_makan}}">
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-tone float-right"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</x-module.kepegawaian>