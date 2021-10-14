<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kelas</title>
</head>
<body>
    <fieldset>
        <legend>Identitas Siswa</legend>
        <table>
    <ul>
        @foreach ($posts as $data)
            <tr>
                <td>ID</td>
                <td> : </td>
                <td>{{$data['id']}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td> : </td>
                <td>{{$data['name']}}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td> : </td>
                <td>{{$data['username']}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td> : </td>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td>{{$data['alamat']}}</td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td> : </td>
            @foreach ($data['mapel'] as $isi)
                <td><li>{{$isi}}<br></li></td>
            @endforeach
            </tr>
        @endforeach
    </ul>
    </table>
    </fieldset>
</body>
</html>
