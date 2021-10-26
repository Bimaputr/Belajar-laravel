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
Route::get('biodata2', function () {
    $nama = "Bima";
    $jk = "laki-laki";
    $tl = "Purworejo";
    $ll = "09 Agustus 2003";
    $alm = "Rancamanyar Baleendah";
    $agm = "Islam";
    $hobi = "Bermain";
    return view('Biodata', compact('nama', 'jk', 'tl', 'll', 'alm', 'agm', 'hobi'));
});
