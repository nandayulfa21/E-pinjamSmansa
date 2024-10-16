<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan; // Pastikan Model Pengajuan sudah dibuat dan dikonfigurasi
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PengajuanExport; // Pastikan export class sudah dibuat
use Illuminate\Http\Request;

class AdmPengajuanController extends Controller
{
    public function index()
    {
        $data = Pengajuan::get();
        // dd($data);
        return view('admin.adminpengajuan', ['data' => $data]); // Sesuaikan nama view dengan file Blade yang ada
    }

    // Fungsi untuk mendownload data pengajuan dalam format Excel
    public function exportPengajuan()
    {
        return Excel::download(new PengajuanExport, 'pengajuan.xlsx');
    }
}
