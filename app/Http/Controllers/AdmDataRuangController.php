<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmDataRuangController extends Controller
{
    public function index()
    {
        return view('admin.admindataruangan'); // Pastikan nama file view sesuai dengan lokasi file Blade
    }
}
