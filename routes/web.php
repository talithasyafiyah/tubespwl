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
use App\Http\Controllers\ReportController;


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
    //siswa
    Route::get('siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
    Route::get('/addsiswa', [DatasiswaController::class, 'create'])->name('admin.addsiswa');
    Route::post('/insertsiswa', [DatasiswaController::class, 'store'])->name('insertsiswa');
    Route::get('/editsiswa/{id}', [DatasiswaController::class, 'edit'])->name('admin.editsiswa');
    Route::put('/updatesiswa/{id}', [DatasiswaController::class, 'update'])->name('admin.updatesiswa');
    Route::delete('/deletesiswa/{id}', [DatasiswaController::class, 'destroy'])->name('admin.deletesiswa');
    //kelas
    Route::get('kelas', [AdminController::class, 'kelas'])->name('admin.kelas');
    Route::delete('/deletekelas/{id}', [AdminController::class, 'deletekelas'])->name('admin.deletekelas');
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
    Route::put('/confirmAcc/{id}', [ConfirmController::class, 'confirmAcc']);
    Route::put('/confirmReject/{id}', [ConfirmController::class, 'confirmReject']);

    Route::delete('/deletetabungan/{id}', [TabunganController::class, 'destroy'])->name('admin.delete');
    Route::get('confirm', [ConfirmController::class, 'index'])->name('admin.confirm');
    Route::get('report', [AdminController::class, 'report'])->name('admin.report');
});

//Siswa
Route::group(['middleware' => ['auth','ceklevel:Siswa']], function() {
    Route::get('dashSiswa', [SiswaController::class, 'dashSiswa'])->name('siswa.dashSiswa');
    Route::get('Siswa', [SiswaController::class, 'Siswa'])->name('siswa.siswa');
    Route::get('Tabungan', [SiswaController::class, 'Tabungan'])->name('siswa.tabungan'); //Read
    Route::post('Tabungan/store', [SiswaController::class, 'store'])->name('siswa.simpan'); //Create
    Route::get('Transaksi', [SiswaController::class, 'Transaksi'])->name('siswa.transaksi');
    Route::get('Report', [ReportController::class, 'index'])->name('siswa.report');
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