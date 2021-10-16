<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>
<body>
<table>
    <center><h2>Data Dosen</h2></center>
    @foreach ($d as $dosen)
        <tr>
            <td>NIPD</td>
            <td> : </td>
            <td>{{$dosen->nipd}}</td>
        </tr>
        <tr>
            <td>Nama Dosen</td>
            <td> : </td>
            <td>{{$dosen->nama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>{{$dosen->alamat}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
