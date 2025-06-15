<?php

use Illuminate\Support\Facades\Route; //ini import
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SemenController;
use App\Http\Controllers\KaryawanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('halo', function () {
// 	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
// });

// Route::get('blog', function () {
// 	return view('blog');
// });

// Route::get('blog', [Link::class, 'helloword']);

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/latihan1', function () {
    return view('latihan1');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('/tugaspertama', function () {
    return view('tugaspertama');
});

Route::get('dosen', [Link::class, 'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

//route CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);

Route::get('/semen', [SemenController::class, 'index']);
Route::get('/semen/tambah', [SemenController::class, 'tambah']);
Route::post('/semen/store', [SemenController::class, 'store']);
Route::get('/semen/edit/{id}', [SemenController::class, 'edit']);
Route::post('/semen/update/{id}', [SemenController::class, 'update']);
Route::get('/semen/hapus/{id}', [SemenController::class, 'hapus']);
Route::get('/semen/cari', [SemenController::class, 'cari']);

// Route CRUD Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::delete('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);
