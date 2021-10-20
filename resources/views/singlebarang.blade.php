<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Barang</title>
</head>
<body>
    <h3>Table Single Barang</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$barangs->nama}}</td>
        </tr>
        <tr>
            <td>Varian</td>
            <td> : </td>
            <td>{{$barangs->varian}}</td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td> : </td>
            <td>{{$barangs->harga_beli}}</td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td> : </td>
            <td>{{$barangs->harga_jual}}</td>
        </tr>
    </table>
</body>
</html>
