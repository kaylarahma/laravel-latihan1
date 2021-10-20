<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian</title>
</head>
<body>
    <h3>Table Pembelian</h3>
    <table>
        @foreach ($pembelian as $data)
        <tr>
            <td>Pesanan</td>
            <td> : </td>
            <td>{{$data->nama_barang}}</td>
        </tr>
        <tr>
            <td>Suplier</td>
            <td> : </td>
            <td>{{$data->nama_suplier}}</td>
        </tr>
        <tr>
            <td>Jumlah Pesanan</td>
            <td> : </td>
            <td>{{$data->qty}}</td>
        </tr>
        <tr>
            <td>Tanggal Beli</td>
            <td> : </td>
            <td>{{$data->tgl}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
