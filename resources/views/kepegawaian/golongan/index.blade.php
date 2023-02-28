<x-module.kepegawaian>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> GOLONGAN TUNJANGAN UANG MAKAN
        </h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('kepegawaian/golongan/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="data-table" class="table table-bordered">
                <thead class="bg-dark">
                    <th style="width: 1%;color: white;">NO</th>
                    <th width="90px" class="text-center" style="color: white;">AKSI</th>
                    <th class="text-center" style="color: white;">GOLONGAN</th>
                    <th class="text-center" style="color: white;">UANG MAKAN</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($list_golongan->sortByDesc('created_at')->values() as $golongan)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.edit-button url="kepegawaian/golongan" id="{{ $golongan->id }}" />
                                <x-template.button.delete-button url="kepegawaian/golongan" id="{{ $golongan->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $golongan->jabatan }}</td>
                        <td class="text-center">Rp. {{number_format($golongan->uang_makan)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-module.kepegawaian>