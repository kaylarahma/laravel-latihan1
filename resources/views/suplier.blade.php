<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suplier</title>
</head>
<body>
    <h3>Table Suplier</h3>
    <table>
        @foreach ($suplier as $data)
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$data->nama}}</td>
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
        @endforeach
    </table>
</body>
</html>
