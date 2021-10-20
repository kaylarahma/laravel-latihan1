<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembeli</title>
</head>
<body>
    <h3>Table Pembeli</h3>
    <table>
        @foreach ($pembeli as $data)
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$data->nama}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td>{{$data->jk}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>{{$data->alamat}}</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td> : </td>
            <td>{{$data->kode_pos}}</td>
        </tr>
        <tr>
            <td>Kota</td>
            <td> : </td>
            <td>{{$data->kota}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td>{{$data->tgl_lahir}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
