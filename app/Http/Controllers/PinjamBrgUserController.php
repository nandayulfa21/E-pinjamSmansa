<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamBrgUserController extends Controller
{
    public function index()
    {
        return view('user.pinjam-barang'); 
    }
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserKeranjangController extends Controller
{
    public function index()
    {
        return view('user.usercheckout');
    }

    public function create()
    {
        // Menampilkan form peminjaman ruangan
        return view('user.userformbarang');
    }
}
