<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('hal2', function () {
    return "<h1>Selamat Datang di Halaman 2</h2>";
});
Route::get('Biodata', function () {
    $nama = "Bima";
    $jk = "laki-laki";
    $tl = "Purworejo";
    $ll = "09 Agustus 2003";
    $alm = "Rancamanyar Baleendah";
    $agm = "Islam";
    $hobi = "Bermain";

    return "<h2>Selamat Datang<br></h2> Nama: " . $nama .
        "<br>Jenis Kelamin: " . $jk .
        "<br>Tempat lahir " . $tl .
        "<br>Tanggal Lahir: " . $ll .
        "<br>Alamat: " . $alm .
        "<br>Agama: " . $agm .
        "<br>Hobi: " . $hobi;

});
// Route::get('biodata2', function () {
//     $nama = "Bima";
//     $jk = "laki-laki";
//     $tl = "Purworejo";
//     $ll = "09 Agustus 2003";
//     $alm = "Rancamanyar Baleendah";
//     $agm = "Islam";
//     $hobi = "Bermain";
//     return view('Biodata', compact('nama', 'jk', 'tl', 'll', 'alm', 'agm', 'hobi'));
// });
Route::get('/input/{nama}/{jk}/{tl}/{ll}/{alm}/{agm}/{hobi}', function ($nama, $jk, $tl, $ll, $alm, $agm, $hobi) {
    echo "Nama Saya : " . $nama;
    echo "<br>Jenis kelamin :" . $jk;
    echo "<br>Tempat Lahir :" . $tl;
    echo "<br>Tanggal lahir :" . $ll;
    echo "<br>Alamat :" . $alm;
    echo "<br>Agama :" . $agm;
    echo "<br>Hobi :" . $hobi . " :)";
});
Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'lorem ipsun 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'lorem ipsun 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'lorem ipsun 3', 'content' => 'content ketiga'],
    ];
    //dd($data);
    return view('blog', compact('data'));
});
