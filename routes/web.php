<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Route.ServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('profile', function () {
    $nama = "Kayla Rahmanisa";
    return view('profile', compact('nama'));
});

Route::get('post/{id}', function ($a) {
    return view('post', compact('a'));
});

Route::get('bio/{nama}/{umur}/{place}', function ($a, $b, $c) {
    return view('bio', compact('a', 'b', 'c'));
});

Route::get('page/{id?}', function ($a = 1) {
    return "Halaman post ke - $a";
});

Route::get('pesan/{ma?}/{mi?}/{ce?}', function ($a = null, $b = null, $c = null) {

    if ($a == null && $b == null && $c == null) {
        $isi = "Anda Tidak Memesan, Silahkan Pulang";
    }
    if ($a != null) {
        $isi = "Anda Memesan <br>
                Makanan : $a";
    }
    if ($a != null && $b != null) {
        $isi = "Anda Memesan <br>
                Makanan : $a <br>
                Minuman : $b";
    }
    if ($a != null && $b != null && $c != null) {
        $isi = "Anda Memesan <br>
                Makanan : $a <br>
                Minuman : $b <br>
                Cemilan : $c <br>";
    }return $isi;
});

Route::get('biodata', function () {
    $nama = "Kayla Rahmanisa";
    $umur = 17;
    $alamat = "Jl.Sukamenak Margahayu Bandung";
    $skul = "Smk Assalaam Bandung";
    $kls = "XII RPL 1";
    $hobi = "Nyanyi";
    return view('biodata', compact('nama', 'umur', 'alamat', 'skul', 'kls', 'hobi'));
});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Lipsum 1', 'content' => 'content 1'],
        ['id' => 2, 'title' => 'Lorem Lipsum 2', 'content' => 'content 2'],
        ['id' => 3, 'title' => 'Lorem Lipsum 3', 'content' => 'content 3'],
    ];
    return view('blog', compact('posts'));
});

Route::get('kelas', function () {
    $posts = [
        ['id' => 1, 'name' => 'Abelina Nur Aulia', 'username' => 'abelinanur', 'email' => 'abelinanur@gmail.com', 'alamat' => 'Jl.Margahayu',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Matematika',
                'mapel3' => 'Rekayasa Perangkat Lunak',
            ],
        ],
        ['id' => 2, 'name' => 'Adzura Angelita', 'username' => 'adzuraa', 'email' => 'adzurangelita@gmail.com', 'alamat' => 'Jl.Situ Tarate',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Matematika',
                'mapel3' => 'Rekayasa Perangkat Lunak',
            ],
        ],
        ['id' => 3, 'name' => 'Kayla Rahmanisa', 'username' => 'kaylarahma', 'email' => 'kaylarahmanisa83@gmail.com', 'alamat' => 'Jl.Sukamenak',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Matematika',
                'mapel3' => 'Rekayasa Perangkat Lunak',
            ],
        ],
        ['id' => 4, 'name' => 'Risma Septiani Fadila', 'username' => 'rismafadila', 'email' => 'rismafadila@gmail.com', 'alamat' => 'Jl.Ciparay Tengah',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Matematika',
                'mapel3' => 'Rekayasa Perangkat Lunak',
            ],
        ],
        ['id' => 5, 'name' => 'Seni Oktoviani', 'username' => 'seniokto', 'email' => 'senioktoviani@gmail.com', 'alamat' => 'Jl.Sindang Play',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Matematika',
                'mapel3' => 'Rekayasa Perangkat Lunak',
            ],
        ],
    ];
    return view('kelas', compact('posts'));
});
