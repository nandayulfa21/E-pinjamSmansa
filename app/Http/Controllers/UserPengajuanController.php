<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class UserPengajuanController extends Controller
{
    public function index()
    {
        return view('user.userpengajuan');
    }

    public function create()
    {
        return view('user.userformpengajuan');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal_pengajuan' => 'required|date',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jenis_barang' => 'required|string|max:255',
            'merk_spesifikasi' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'satuan_barang' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:500',
        ]);

        
        try {
            // Simpan pengajuan baru ke database
            Pengajuan::create([
                'tanggal_pengajuan' => $request->input('tanggal_pengajuan'),
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'jenis_barang' => $request->input('jenis_barang'),
                'merk_spesifikasi' => $request->input('merk_spesifikasi'),
                'jumlah' => $request->input('jumlah'),
                'satuan_barang' => $request->input('satuan_barang'),
                'keterangan' => $request->input('keterangan'),
            ]);

            // Kembalikan response JSON jika berhasil
            return response()->json([
                'success' => true,
                'message' => 'Pengajuan berhasil disimpan!'
            ], 200);

        } catch (\Exception $e) {
            // Kembalikan response JSON jika terjadi error
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}
