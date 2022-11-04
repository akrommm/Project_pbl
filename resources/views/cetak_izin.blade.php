<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Izin</title>
    <style>
        table tr td {
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        @page {
            size: 8.27in 11.69in;
        }
    </style>
</head>

<body>
    <table align="center">
        <tr>
            <td><img src="assets/images/others/Logo_Politap_kecil.png" alt="" width="110" height="110"></td>
            <td>
                <center>
                    <font size="5">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN <br> RISET DAN TEKNOLOGI</font>
                    <br>
                    <font size="4"><strong>POLITEKNIK NEGERI KETAPANG</strong></font>
                    <br>
                    <font size="3">Alamat : Jalan Rangga Sentap-Dalong, Kelurahan Sukaharja Kecamatan Delta Pawan <br> Kabupaten Ketapang-Kalimantan Barat 78813 Telepon (0534) 3030686</font>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
    </table>

    <table align="center">
        <tr>
            <td>Hal</td>
            <td width="625"> : Pengajuan Izin</td>
        </tr>
    </table>
    <br>
    <br>
    <table align="center">
        <tr>
            <td width="660">Yth. <br>Admin Kepegawaian<br>Di tempat.</td>
        </tr>
    </table>
    <br>
    <br>
    <table align="center">
        <tr>
            <td width="660">Dengan Hormat,<br>Saya yang betanda tangan dibawah ini:</td>
        </tr>
    </table>
    <br>
    <table align="center">
        @foreach($data as $d)
        <tr>
            <td>Nama Lengkap</td>
            <td width="541"> : {{$d->nama}}</td>
        </tr>
        <tr>
            <td>NIP/NIK</td>
            <td width="541"> : {{$d->nip}}</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td width="541"> : {{$d->jabatan}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <table align="center">
        <tr>
            <td width="660">Bermaksud mengajukan izin sakit pada tanggal .</td>
        </tr>
        <tr>
            <td width="660">Demikian surat sakit ini saya ajukan. Atas perhatian dan diberikannya permohohan izin saya ini. Saya ucapkan banyak terimakasih.</td>
        </tr>

        <table width="660" align="center">
            <br>
            <br>
            <tr>
                <td width="0"></td>
                <td class="text" align="center">Mengetahui<br><br><br><br>Lionel Messi</td>
                <td width=""></td>
                <td class="text" align="center">Pemohon<br><br><br><br>Lionel Messi</td>
            </tr>
        </table>

    </table>
</body>

</html>