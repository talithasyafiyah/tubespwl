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
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\KelasController;


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
    Route::patch('/updatesiswa', [DatasiswaController::class, 'update'])->name('admin.updatesiswa');
    Route::delete('/deletesiswa/{id}', [DatasiswaController::class, 'destroy'])->name('admin.deletesiswa');
    
    //kelas
    Route::get('kelas', [AdminController::class, 'kelas'])->name('admin.kelas');
    Route::get('/addkelas', [KelasController::class, 'create'])->name('admin.addkelas');
    Route::post('/insertkelas', [KelasController::class, 'store'])->name('insertkelas');
    Route::delete('/deletekelas/{id}', [AdminController::class, 'deletekelas'])->name('admin.deletekelas');
    Route::get('/editkelas/{id}', [KelasController::class, 'edit'])->name('admin.editkelas');
    Route::put('/updatekelas/{id}', [KelasController::class, 'update'])->name('admin.updatekelas');
   //berita
   Route::get('berita', [BeritaController::class, 'index'])->name('admin.berita');
   Route::get('/addberita', [BeritaController::class, 'create'])->name('admin.addberita');
   Route::post('/insertberita', [BeritaController::class, 'store'])->name('insertberita');
   Route::get('/editberita/{id}', [BeritaController::class, 'edit'])->name('admin.editberita');
   Route::put('/updateberita/{id}', [BeritaController::class, 'update'])->name('admin.updateberita');
   Route::put('/showberita/{id}', [BeritaController::class, 'show'])->name('admin.showberita');
   Route::delete('/deleteberita/{id}', [BeritaController::class, 'destroy'])->name('admin.deleteberita');
    //tabungan
    Route::get('/tabungan', [TabunganController::class, 'index'])->name('admin.tabungan');
    Route::get('/addtabungan', [TabunganController::class, 'create'])->name('admin.addtabungan');
    Route::post('/inserttabungan', [TabunganController::class, 'store'])->name('inserttabungan');
    Route::get('/edittabungan/{id}', [TabunganController::class, 'edit'])->name('admin.edittabungan');
    Route::put('/updatetabungan/{id}', [TabunganController::class, 'update'])->name('admin.updatetabungan');
    Route::put('/showtabungan/{id}', [TabunganController::class, 'show'])->name('admin.showtabungan');
    Route::delete('/deletetabungan/{id}', [TabunganController::class, 'destroy'])->name('admin.delete');
    //konfirm
    Route::put('/confirmAcc/{id}', [ConfirmController::class, 'confirmAcc']);
    Route::put('/confirmReject/{id}', [ConfirmController::class, 'confirmReject']);
    Route::get('confirm', [ConfirmController::class, 'index'])->name('admin.confirm');

});

//Siswa
Route::group(['middleware' => ['auth','ceklevel:Siswa']], function() {
    Route::get('dashSiswa', [SiswaController::class, 'dashSiswa'])->name('siswa.dashSiswa');
    Route::get('Siswa', [SiswaController::class, 'Siswa'])->name('siswa.siswa');
    //Read dan Form
    Route::get('Tabungan', [SiswaController::class, 'Tabungan'])->name('siswa.tabungan');
    // Route::post('Tabungan/store', [TabunganController::class, 'store'])->name('siswa.simpan'); 
    //Create Insert
    Route::post('Tabungan/store', [SiswaController::class, 'store'])->name('siswa.simpan');
    //Create Form             
    Route::get('Profil', [SiswaController::class, 'buatProfil'])->name('siswa.profil');                 
    //Create Insert
    Route::post('Profil/store', [SiswaController::class, 'storeProfil'])->name('siswa.simpanprofil');   
    //Edit Profil
    Route::get('Profil/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.editprofil');       
    //Update Profil 
    Route::put('Profilupdate/{id}',[SiswaController::class, 'update'])->name('siswa.updateprofil');   
    //Delete Tabungan
    Route::delete('/del/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
    Route::get('Transaksi', [SiswaController::class, 'Transaksi'])->name('siswa.transaksi');
    Route::get('Report', [ReportController::class, 'index'])->name('siswa.report');
    Route::get('/report/{id}',[ReportController::class, 'downloadPDF'])->name('download');
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