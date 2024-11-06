<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/admin.css') }}">
    <title>Pengajuan</title>
    <style>
        /* Tambahkan ini untuk mengubah warna tombol download */
        .btn-download {
            background-color: #007bff; /* button download*/
            color: #fff; /* Warna teks putih */
            border: none; /* Menghilangkan border */
            padding: 10px 20px; /* Padding untuk tombol */
            border-radius: 5px; /* Membuat sudut tombol melengkung */
            cursor: pointer; /* Menunjukkan bahwa tombol dapat diklik */
            transition: background-color 0.3s; /* Animasi perubahan warna */
        }

        .btn-download:hover {
            background-color: #0056b3; /* Warna saat hover */
        }
    </style>
</head>

<body>
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">SMA N 1 SLEMAN</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admindatabarang') }}">
                    <i class='bx bxs-package'></i>
                    <span class="text">Data Barang</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/admindataruangan') }}">
                    <i class='bx bxs-school'></i>
                    <span class="text">Data Ruangan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Data Peminjam</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/adminlaporan') }}">
                    <i class='bx bxs-report'></i>
                    <span class="text">Laporan</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class='bx bx-clipboard'></i>
                    <span class="text">Pengajuan</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Pengaturan</span>
                </a>
            </li>
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Kategori</a>
            <form action="#">
                <!-- Optional search form can be added here -->
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Data Pengajuan</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Beranda</a></li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li><a class="active" href="#">Data Pengajuan</a></li>
                    </ul>
                </div>


                {{-- tombol download exel --}}
               <form action="{{ route('export.pengajuan') }}" method="GET" id="download-form">
                    <input type="hidden" id="hidden-start-date" name="start_date">
                    <input type="hidden" id="hidden-end-date" name="end_date">
                    <button type="submit" class="btn-download" id="download-btn">
                        <i class='bx bxs-cloud-download'></i>
                        <span class="text">Download Excel</span>
                    </button>
                </form>
            </div>


            {{-- filter(berdasarkan tanggal) --}}
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Tabel Pengajuan</h3>
                        <label for="start_date">Tanggal Mulai:</label>
                        <input type="date" id="tanggal_mulai" name="start_date">
                        
                        <label for="end_date">Tanggal Selesai:</label>
                        <input type="date" id="tanggal_selesai" name="end_date">
                        
                        <button id="filter-btn">Filter</button>
                    </div>


                    <table>
                        <thead>
                            <tr>
                                <th>Tanggal Pengajuan</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Jenis Barang</th>
                                <th>Merk/Spesifikasi</th>
                                <th>Jumlah</th>
                                <th>Satuan Barang</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody id="data-body">
                            @foreach ($data as $value) 
                            <tr>
                                <td>{{ $value->tanggal_pengajuan }}</td>  
                                <td>{{ $value->nama }}</td>
                                <td>{{ $value->jabatan }}</td>
                                <td>{{ $value->jenis_barang }}</td>
                                <td>{{ $value->merk_spesifikasi }}</td>
                                <td>{{ $value->jumlah }}</td>
                                <td>{{ $value->satuan_barang }}</td>
                                <td>{{ $value->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>

    <script src="{{ asset('assets/script.js') }}"></script>

    
    <script>
        document.getElementById('filter-btn').addEventListener('click', function() {
            const startDate = document.getElementById('tanggal_mulai').value;
            const endDate = document.getElementById('tanggal_selesai').value;
            const rows = document.querySelectorAll('#data-body tr');
        
            rows.forEach(row => {
                const rowDate = row.children[0].innerText; // Mengambil tanggal dari kolom pertama

                // Tampilkan atau sembunyikan baris berdasarkan filter
                row.style.display = (rowDate >= startDate && rowDate <= endDate) ? '' : 'none';
            });

            // Set tanggal di form download
            document.getElementById('hidden-start-date').value = startDate;
            document.getElementById('hidden-end-date').value = endDate;
        });
    </script>
</body>
</html>
