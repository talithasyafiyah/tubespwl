<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TabunganController;

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

//Admin
Route::group(['middleware' => ['auth','ceklevel:Admin']], function() {
    Route::get('dashAdmin', [AdminController::class, 'dashAdmin'])->name('admin.dashAdmin');
    Route::get('siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
    Route::get('kelas', [AdminController::class, 'kelas'])->name('admin.kelas');

    //tabungan
    Route::get('tabungan', [AdminController::class, 'tabungan'])->name('admin.tabungan');
    //add
    Route::get('addtabungan', [AdminController::class, 'addtabungan'])->name('admin.addtabungan');
    Route::post('/inserttabungan', [AdminController::class, 'inserttabungan'])->name('inserttabungan');
    //update
    Route::get('/tampiltabungan/{$id}', [AdminController::class, 'tampiltabungan'])->name('tampiltabungan');
    //delete
    
    Route::get('transaksi', [AdminController::class, 'transaksi'])->name('admin.transaksi');
    Route::get('report', [AdminController::class, 'report'])->name('admin.report');
});

Route::delete('/deletetabungan/{$id}', [TabunganController::class, 'deletetabungan'])->name('deletetabungan');

//Siswa
Route::group(['middleware' => ['auth','ceklevel:Siswa']], function() {
    Route::get('dashSiswa', [SiswaController::class, 'dashSiswa'])->name('siswa.dashSiswa');
    Route::get('Siswa', [SiswaController::class, 'Siswa'])->name('siswa.siswa');
    Route::get('Tabungan', [SiswaController::class, 'Tabungan'])->name('siswa.tabungan');
    Route::get('Transaksi', [SiswaController::class, 'Transaksi'])->name('siswa.transaksi');
    Route::get('Report', [SiswaController::class, 'Report'])->name('siswa.report');
});

//Login Register
Route::get('/log', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registrasi', [RegisterController::class, 'store']);
//Kerjaan Ku
//Home
//Migration (user, siswa, tabungan, kelas)

//Landing page
Route::get('/', [LandingController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
/* Route::get('/transaksi', [TransaksiController::class, 'tambahTransaksi']); */