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
    return view('website.index');
});

Route::get('/siswa', function () {
    return view('website.siswa');
});

Route::get('/kelas', function () {
    return view('website.kelas');
});

Route::get('/tabungan', function () {
    return view('website.tabungan');
});

Route::get('/transaksi', function () {
    return view('website.transaksi');
});

Route::get('/report', function () {
    return view('website.report');
});
