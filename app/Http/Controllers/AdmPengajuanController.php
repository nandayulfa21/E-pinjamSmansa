<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan; 
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PengajuanExport;
use Illuminate\Http\Request;

class AdmPengajuanController extends Controller
{
    public function index()
    {
        $data = Pengajuan::get();
        // dd($data);
        return view('admin.adminpengajuan', ['data' => $data]);
        
        // Ambil semua pengajuan dari tabel 'requests'
        $requests = Request::with('user')->get(); 
    
        return view('admin.requests.index', compact('requests'));
        }
        
   
        public function exportPengajuan(Request $request)
        {
            $startDate = $request->get('start_date');
            $endDate = $request->get('end_date');
        
            if ($startDate && $endDate) {
                // Filter data berdasarkan tanggal
                $data = Pengajuan::whereBetween('tanggal_pengajuan', [$startDate, $endDate])
                    ->select('Nama', 'Jabatan', 'Jenis_Barang', 'Merk_Spesifikasi', 'Jumlah', 'Satuan_Barang', 'Keterangan')
                    ->get();
            } else {
                // Ambil semua data jika tidak ada filter
                $data = Pengajuan::select('Nama', 'Jabatan', 'Jenis_Barang', 'Merk_Spesifikasi', 'Jumlah', 'Satuan_Barang', 'Keterangan')->get();
            }
        
            return Excel::download(new PengajuanExport($data), 'pengajuan.xlsx');
        }
        
}
    