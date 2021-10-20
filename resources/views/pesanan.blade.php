<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan</title>
</head>
<body>
    <h3>Table Pesanan</h3>
    <table>
        @foreach ($pesanan as $data)
        <tr>
            <td>Nama Pembeli</td>
            <td> : </td>
            <td>{{$data->nama_pelanggan}}</td>
        </tr>
        <tr>
            <td>Pesanan</td>
            <td> : </td>
            <td>{{$data->nama_barang}}</td>
        </tr>
        <tr>
            <td>Jumlah Pesanan</td>
            <td> : </td>
            <td>{{$data->qty}}</td>
        </tr>
        <tr>
            <td>Tanggal Pesan</td>
            <td> : </td>
            <td>{{$data->tgl_pesan}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
