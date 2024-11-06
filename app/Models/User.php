<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles; // Tambahkan ini

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles; // Tambahkan HasRoles di sini

    protected $connection = 'mysql'; // koneksi yang diatur di config/database.php

    protected $fillable = [
        'nama',  // Nama lengkap
        'nip_nis', // NIS/NIP
        'email', // Email
        'status', // Status (guru/siswa)
        'password', // Password
    ];

    protected $hidden = [
        'password', // Sembunyikan password dari array
        'remember_token', // Sembunyikan token
    ];

    protected $casts = [
        'email_verified_at' => 'datetime', // Cast untuk email_verifikasi
        // 'password' => 'hashed', // Jangan aktifkan ini jika belum sesuai versi Laravel
    ];
}
