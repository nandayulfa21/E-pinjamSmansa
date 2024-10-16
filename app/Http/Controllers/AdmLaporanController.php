<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmLaporanController extends Controller
{
    public function index()
    {
        return view('admin.adminlaporan'); // Pastikan nama file view sesuai dengan lokasi file Blade
    }
}