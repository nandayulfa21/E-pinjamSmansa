<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // Logika untuk halaman "Pinjam Ruangan"
        return view('user.pinjam-ruangan');
    }

    public function create()
    {
        // Menampilkan form peminjaman ruangan
        return view('user.formruanganuser');
    }
}
