<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function tampilRegistrasi()
    {
        return view('registrasi');
    }

    public function submitRegistrasi(Request $request)
    {
        
        // Validasi data registrasi
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip_nis' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        //dd($request->all());
        
        // Buat user baru dengan peran default sebagai 'user'
        $user = new User();
        $user->nama = $request->nama;
        $user->nip_nis = $request->nip_nis;
        $user->email = $request->email;
        $user->status = $request->status;  // Set default peran sebagai user
        $user->password = bcrypt($request->password);
        $user->save();

        // Redirect setelah registrasi sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
    
    public function tampilLogin()
    {
        return view('login');
    }

    public function submitLogin(Request $request)
    {
        // dd($request->all()); 
        // Validasi data login
        $request->validate([
            'nip_nis' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba autentikasi
        $credentials = $request->only('nip_nis', 'password');


       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    

            $user = Auth::user();

        // Ambil peran-peran pengguna dan ubah menjadi array
        $rolesArray = $user->getRoleNames()->toArray(); 

        // Cek apakah array berisi peran 'admin'
        if (in_array('admin', $rolesArray)) {
            // Logika jika pengguna memiliki peran 'admin'
            return redirect()->route('admin.dashboard');
        } else {
            // Logika jika pengguna tidak memiliki peran 'admin'
            return redirect()->route('user.dashboard');
        }


        } else {
            // Jika gagal, kembali ke halaman login dengan pesan kesalahan
            return redirect()->back()->withErrors(['nip_nis' => 'NIP/NIS atau password salah']);

        }
    }
}