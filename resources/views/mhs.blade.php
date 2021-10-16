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
    <center><h2>Data Mahasiswa</h2></center>
    @foreach ($m as $mhs)
        <tr>
            <td>NIM</td>
            <td> : </td>
            <td>{{$mhs->nim}}</td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td> : </td>
            <td>{{$mhs->nama}}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td> : </td>
            <td>{{$mhs->jurusan}}</td>
        </tr>
        <tr>
            <td>Wali</td>
            <td> : </td>
            <td>{{$mhs->wali}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
