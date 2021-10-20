<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Pembeli</title>
</head>
<body>
    <h3>Table Single Pembeli</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$pembelis->nama}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td>{{$pembelis->jk}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>{{$pembelis->alamat}}</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td> : </td>
            <td>{{$pembelis->kode_pos}}</td>
        </tr>
        <tr>
            <td>Kota</td>
            <td> : </td>
            <td>{{$pembelis->kota}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td>{{$pembelis->tgl_lahir}}</td>
        </tr>
    </table>
</body>
</html>
