<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tambah SKP
        </h5>
    </div>

    <a href="{{ url('pegawai/skp') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/skp') }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Yakin ingin mengupload data ini?')">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tahun</label>
                            <input type="number" name="tahun" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Orientasi Pelayanan</label>
                            <input type="number" name="orientasi_pelayanan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Inisiatif Kerja</label>
                            <input type="number" name="inisiatif_kerja" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Komitmen</label>
                            <input type="number" name="komitmen" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kerja Sama</label>
                            <input type="number" name="kerja_sama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Kepemimpinan</label>
                            <input type="number" name="kepemimpinan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Sasaran Kerja ASN</label>
                            <input type="number" name="sasaran_kerja" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Upload Dokumen</label>
                            <input type="file" name="file" accept=".pdf" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>