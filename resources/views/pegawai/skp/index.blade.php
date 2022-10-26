<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> SKP
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('pegawai/skp/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th class="text-center" style="color: white;">Tahun</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th class="text-center" width="120px" style="color: white;">Dokumen</th>
                    <th class="text-center" width="120px" style="color: white;">Aksi</th>
                    <th class="text-center" width="230px" style="color: white;">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_skp as $skp)
                    @if ($pegawai->id == $skp->id_pegawai)
                    @if ($skp->status == 1)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $skp->tahun }}</td>
                        <td class="text-center">
                            {{ $skp->bulan_awal }} - {{ $skp->bulan_akhir }}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($skp->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/skp" id="{{ $skp->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($skp->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($skp->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($skp->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="card-header">
            <div class="card-title">
                SKP Disetujui
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th class="text-center" style="color: white;">Tahun</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th class="text-center" style="color: white;" width="120px">Dokumen</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_skp as $skp)
                    @if ($pegawai->id == $skp->id_pegawai)
                    @if ($skp->status == 2)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $skp->tahun }}</td>
                        <td class="text-center">
                            {{ $skp->bulan_awal }} - {{ $skp->bulan_akhir }}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($skp->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/skp" id="{{ $skp->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($skp->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($skp->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($skp->status == 3)
                            <label class="btn btn-danger">Ditolak</label>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="card-header">
            <div class="card-title">
                SKP Ditolak
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">No</th>
                    <th class="text-center" style="color: white;">Tahun</th>
                    <th class="text-center" style="color: white;">Periode</th>
                    <th class="text-center" style="color: white;" width="120px">Dokumen</th>
                    <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    <th class="text-center" style="color: white;" width="230px">Status</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_skp as $skp)
                    @if ($pegawai->id == $skp->id_pegawai)
                    @if ($skp->status == 3)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $skp->tahun }}</td>
                        <td class="text-center">
                            {{ $skp->bulan_awal }} - {{ $skp->bulan_akhir }}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="" target="popup" onclick="window.open('{{ url($skp->file) }}','popup','width=800,height=600'); return false;" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                        <td class="text-center">
                            <x-template.button.delete-button url="pegawai/skp" id="{{ $skp->id }}" />
                        </td>
                        <td class="text-center">
                            @if ($skp->status == 1)
                            <label class="btn btn-warning">Tunggu</label>
                            @endif

                            @if ($skp->status == 2)
                            <label class="btn btn-success">Disetujui</label>
                            @endif

                            @if ($skp->status == 3)
                            <label class="btn btn-danger m-r-5">Ditolak</label>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.pegawai>