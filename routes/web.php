<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ConfirmController;

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
    //berita
    Route::get('berita', [AdminController::class, 'berita'])->name('admin.berita');
    //add
    Route::get('/addberita', [BeritaController::class, 'create'])->name('admin.addberita');
    Route::post('/insertberita', [BeritaController::class, 'store'])->name('insertberita');
    //tabungan
    Route::get('/tabungan', [TabunganController::class, 'index'])->name('admin.tabungan');
    //add
    Route::get('/addtabungan', [TabunganController::class, 'create'])->name('admin.addtabungan');
    Route::post('/inserttabungan', [TabunganController::class, 'store'])->name('inserttabungan');
    //update
    Route::get('/edittabungan/{id}', [TabunganController::class, 'edit'])->name('admin.edittabungan');
    Route::put('/updatetabungan/{id}', [TabunganController::class, 'update'])->name('admin.updatetabungan');
    //konfirm
    Route::put('/confirmAcc/{id}', [ConfirmController::class, 'confirmAcc'])->name('admin.confirm');
    Route::put('/confirmReject/{id}', [ConfirmController::class, 'confirmReject'])->name('admin.reject');

    Route::delete('/deletetabungan/{id}', [TabunganController::class, 'destroy'])->name('admin.delete');
    Route::get('confirm', [ConfirmController::class, 'index']);
    Route::get('report', [AdminController::class, 'report'])->name('admin.report');
});

//Siswa
Route::group(['middleware' => ['auth','ceklevel:Siswa']], function() {
    Route::get('dashSiswa', [SiswaController::class, 'dashSiswa'])->name('siswa.dashSiswa');
    Route::get('Siswa', [SiswaController::class, 'Siswa'])->name('siswa.siswa');
    Route::get('Tabungan', [SiswaController::class, 'Tabungan'])->name('siswa.tabungan'); //Read
    Route::post('Tabungan/store', [SiswaController::class, 'store'])->name('siswa.simpan'); //Create
    Route::get('Transaksi', [SiswaController::class, 'Transaksi'])->name('siswa.transaksi');
    Route::get('Report', [SiswaController::class, 'Report'])->name('siswa.report');
});

//Login Register
Route::get('/log', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//Kerjaan Ku
//Home
//Migration (user, siswa, tabungan, kelas)

//Landing page
Route::get('/', [LandingController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
/* Route::get('/transaksi', [TransaksiController::class, 'tambahTransaksi']); */