<x-module.unit>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">UPLOAD REKAP ABSENSI
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <div class="card-title text-center">
                Form ini digunakan untuk mengupload rekapan absensi.
            </div>
        </div>
        <div class="card-body">
            <a href="{{ url('unit/absensi/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th width="90px" class="text-center" style="color: white;">AKSI</th>
                    <th class="text-center" style="color: white;">DATA ABSENSI BULAN</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_rekap as $rekap)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="unit/absensi" id="" />
                                <x-template.button.edit-button url="unit/absensi" id="" />
                                <x-template.button.delete-button url="unit/absensi" id="" />
                            </div>
                        </td>
                        <td class="text-center">{{$rekap->bulan}}</td>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-module.unit>