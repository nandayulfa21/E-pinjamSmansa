<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PinjamBrgUserController;
use App\Http\Controllers\UserKeranjangController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\UserPengajuanController;
use App\Http\Controllers\Admin\PengajuanController;


use App\Http\Controllers\AdmDataBrgController;
use App\Http\Controllers\AdmDataRuangController;
use App\Http\Controllers\AdmLaporanController;
use App\Http\Controllers\AdmPengajuanController;
//use App\Http\Controllers\AuthController;

use App\Http\Controllers\AuthController;





Route::get('/', function () {
    return view('login');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/user/dashboard', [UserController::class, 'dashboard']); // Route untuk user dashboard
Route::get('/pinjam-ruangan', [RoomController::class, 'index']);
Route::get('/peminjaman-saya', [PeminjamanController::class, 'index']);
Route::get('/pinjam-barang', [PinjamBrgUserController::class, 'index']);
Route::get('/pinjam-ruangan/form', [RoomController::class, 'create']);


Route::post('/user/keranjang/tambah', [UserKeranjangController::class, 'tambahKeranjang']);
Route::get('/user/keranjang', [UserKeranjangController::class, 'index']);

Route::get('/userpengajuan', [UserPengajuanController::class, 'index']);
Route::get('/userpengajuan/form', [UserPengajuanController::class, 'create']);

// Route untuk halaman pengaturan akun
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');

// Route untuk logout (fungsionalitas logout)
Route::post('/logout', [PengaturanController::class, 'logout'])->name('logout');



Route::get('/admindatabarang', [AdmDataBrgController::class, 'index'])->name('admin.data.barang');
Route::get('/admindataruangan', [AdmDataRuangController::class, 'index'])->name('admin.data.ruangan');
Route::get('/adminlaporan', [AdmLaporanController::class, 'index'])->name('admin.laporan');
Route::get('/adminpengajuan', [AdmPengajuanController::class, 'index'])->name('admin.pengajuan');


//fungsi eksport pdf
Route::get('/exportpengajuan', [AdmPengajuanController::class, 'exportPengajuan'])->name('export.pengajuan');


Route::post('/userpengajuan/form', [UserPengajuanController::class, 'store'])->name('pengajuan.store');
Route::get('/user/pengajuan/create', [UserPengajuanController::class, 'create'])->name('user.pengajuan.create'); //menampilkan form
Route::post('/user/pengajuan/store', [UserPengajuanController::class, 'store'])->name('user.pengajuan.store');


// Rute untuk menampilkan form pengajuan
Route::get('/user/pengajuan/create', [UserPengajuanController::class, 'create'])->name('user.pengajuan.create');
// Rute untuk menyimpan pengajuan
Route::post('/user/pengajuan/store', [UserPengajuanController::class, 'store'])->name('user.pengajuan.store');


use App\Http\Controllers\PengajuanBarangController;
Route::get('/admin/pengajuan', [AdmPengajuanController::class, 'index'])->name('admin.pengajuan.index');

// //18 registrasi login
// Route::get('/registrasi', [AuthController:: class, 'tampilRegistrasi'])->name('registrasi.tampil');
// Route::post('/registrasi/submit', [AuthController:: class, 'submitRegistrasi'])->name('registrasi.submit');
// Route::get('/login', [AuthController:: class, 'tampilLogin'])->name('login.tampil');
// Route::post('/login/submit', [AuthController:: class, 'submitLogin'])->name('login.submit');
// Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
// Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
// // Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
// // Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi');
Route::post('/registrasi', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::get('/login-proses', [AuthController::class, 'submitLogin'])->name('login.submit');

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'role:admin']);

// Route untuk dashboard admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Route untuk dashboard user
Route::get('/user/dashboard', [UserController::class, 'index']) ->name('user.dashboard');

// Route untuk dashboard user
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('auth');

use Illuminate\Support\Facades\Auth;
Route::post('/logout', function () { Auth::logout();return redirect('/login')->with('status', 'Kamu sudah logout!');})->name('logout');



