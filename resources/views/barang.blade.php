<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    <h3>Table Barang</h3>
    <table>
        @foreach ($barang as $data)
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$data->nama}}</td>
        </tr>
        <tr>
            <td>Varian</td>
            <td> : </td>
            <td>{{$data->varian}}</td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td> : </td>
            <td>{{$data->harga_beli}}</td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td> : </td>
            <td>{{$data->harga_jual}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
