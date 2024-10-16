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



Route::get('/', function () {
    return view('welcome');
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

// Route untuk logout (jika ada fungsionalitas logout)
Route::post('/logout', [PengaturanController::class, 'logout'])->name('logout');




use App\Http\Controllers\AdmDataBrgController;
use App\Http\Controllers\AdmDataRuangController;
use App\Http\Controllers\AdmLaporanController;
use App\Http\Controllers\AdmPengajuanController;

Route::get('/admindatabarang', [AdmDataBrgController::class, 'index'])->name('admin.data.barang');
Route::get('/admindataruangan', [AdmDataRuangController::class, 'index'])->name('admin.data.ruangan');
Route::get('/adminlaporan', [AdmLaporanController::class, 'index'])->name('admin.laporan');
Route::get('/adminpengajuan', [AdmPengajuanController::class, 'index'])->name('admin.pengajuan');



Route::get('/exportpengajuan', [AdmPengajuanController::class, 'exportPengajuan'])->name('export.pengajuan');


//Route::post('/userpengajuan/form', [UserPengajuanController::class, 'store']);
Route::post('/userpengajuan/form', [UserPengajuanController::class, 'store'])->name('pengajuan.store');

Route::get('/admin/pengajuan', [AdmPengajuanController::class, 'index'])->name('admin.pengajuan.index');
