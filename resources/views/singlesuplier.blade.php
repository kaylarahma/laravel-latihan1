<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Suplier</title>
</head>
<body>
    <h3>Table Single Suplier</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{$supliers->nama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>{{$supliers->alamat}}</td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td> : </td>
            <td>{{$supliers->kode_pos}}</td>
        </tr>
        <tr>
            <td>Kota</td>
            <td> : </td>
            <td>{{$supliers->kota}}</td>
        </tr>
    </table>
</body>
</html>
