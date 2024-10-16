<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('user.peminjaman-saya'); // Mengarahkan ke view 'user.peminjaman-saya'
    }
}
