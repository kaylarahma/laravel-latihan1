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
    return '<h1>Hello</h1>' .
        'Selamat datang di web app saya' .
        '<br>Laravel, emang keren';
});

Route::get('profile', function () {
    $nama = "Kayla Rahmanisa";
    return "Nama Saya Adalah <b>$nama</b>";
});

Route::get('post/{id}', function ($a) {
    return "Halaman post ke - $a";
});

Route::get('bio/{nama}/{umur}/{place}', function ($a, $b, $c) {
    return "Nama Saya $a" .
        "<br>Umur Saya $b tahun" .
        "<br>Alamat Saya di $c";
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
