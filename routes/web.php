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

Route::get('/about', function () {

    $nama = "Nadhif";
    $jenis_kelamin = "Laki-laki";
    $pendidikan = "SMK";
    $pekerjaan = "Pelajar";
    $alamat = "Jl.Sekeawi";

    return view('data_diri', compact('nama', 'jenis_kelamin', 'pendidikan', 'pekerjaan', 'alamat'));
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about2/{nama}/{jenis_kelamin}/{pendidikan}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jenis_kelamin, $pendidikan, $pekerjaan, $alamat) {
    $nama2 = $nama;
    $jenis_kelamin2 = $jenis_kelamin;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;

    return view('data_diri2',compact('nama2','jenis_kelamin2','pendidikan2','pekerjaan2','alamat2'));
});