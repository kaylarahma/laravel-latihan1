<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Pesanan</title>
</head>
<body>
    <h3>Table Single Pesanan</h3>
    <table>
        <tr>
            <td>Nama Pembeli</td>
            <td> : </td>
            <td>{{$pesanans->nama_pelanggan}}</td>
        </tr>
        <tr>
            <td>Pesanan</td>
            <td> : </td>
            <td>{{$pesanans->nama_barang}}</td>
        </tr>
        <tr>
            <td>Jumlah Pesanan</td>
            <td> : </td>
            <td>{{$pesanans->qty}}</td>
        </tr>
        <tr>
            <td>Tanggal Pesan</td>
            <td> : </td>
            <td>{{$pesanans->tgl_pesan}}</td>
        </tr>
    </table>
</body>
</html>
