<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Pengajuan extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'pengajuan';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',           // Nama peminjam
        'jabatan',        // Jabatan peminjam (misal: Guru, Siswa, dll)
        'jenis_barang',   // Jenis barang yang diajukan
        'merk_spesifikasi', // Merk atau spesifikasi barang
        'jumlah',         // Jumlah barang yang diajukan
        'satuan_barang',  // Satuan barang (misal: unit, buah, dll)
        'keterangan'      // Keterangan tambahan
    ];
}


