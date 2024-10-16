<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    // Method untuk menampilkan halaman pengaturan
    public function index()
    {
        // Data statis (tanpa database)
        $userData = [
            'nama' => 'John Doe',
            'email' => 'johndoe@example.com',
            'role' => 'User'
        ];

        // Mengirim data ke view 'user.pengaturan'
        return view('user.pengaturan', compact('userData'));
    }

    // Method untuk logout (jika ingin ada fungsionalitas logout)
    public function logout(Request $request)
    {
        // Logika logout disini (contohnya hanya alert untuk sekarang)
        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}
