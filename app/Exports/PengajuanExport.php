<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Collection;

class PengajuanExport implements FromCollection, WithHeadings
{
    protected $data; // Menyimpan data yang akan diekspor ke Excel

    // data yang akan diekspor
    public function __construct(Collection $data)
    {
        $this->data = $data; // Mengatur properti $data dengan parameter yang diterima
    }

    // Mengembalikan data yang akan diekspor
    public function collection()
    {
        return $this->data; // Mengembalikan data yang telah disimpan dalam properti $data
    }

    // Mengembalikan array yang berisi judul kolom/header untuk file Excel
    public function headings(): array
    {
        return [
            'Nama',               // Judul kolom nama 
            'Jabatan',            
            'Jenis Barang',       
            'Merk/Spesifikasi',   
            'Jumlah',             
            'Satuan Barang',      
            'Keterangan'         
        ];
    }
}
