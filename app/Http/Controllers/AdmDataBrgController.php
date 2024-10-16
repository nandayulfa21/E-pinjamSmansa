<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmDataBrgController extends Controller
{
    // Fungsi untuk menampilkan halaman Data Barang
    public function index()
    {
        // Jika ada data barang dari model, bisa diambil di sini
        // Contoh: $dataBarang = Barang::all();

        return view('admin.admindatabarang'); // Pastikan nama file view sesuai dengan lokasi file Blade
    }
}