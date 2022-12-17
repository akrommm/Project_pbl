<x-module.qr>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> QR GENERATE
        </h5>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Sistem generate tanda tangan digital</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <form action="{{ url('simantap/qr-generator') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>JENIS TANDA TANGAN</h5>
                                        <select name="ttd" id="" class="form-control">
                                            <option disabled selected> Pilih Jenis Tanda Tangan</option>
                                            <option value="Pengajuan Surat">Pengajuan Surat</option>
                                            <option value="Persetujuan Surat">Persetujuan Surat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>TANGGAL SURAT</h5>
                                        <input type="date" class="form-control input-rounded @error('tanggal') is-invalid @enderror" name="tanggal">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>PERIHAL</h5>
                                        <input type="text" class="form-control input-rounded @error('perihal') is-invalid @enderror" name="perihal">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-tone float-right"><i class="fas fa-qrcode"></i> Generate</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.qr>