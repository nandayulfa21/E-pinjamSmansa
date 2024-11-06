<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin.css') }}">

    <title>Form Pengajuan Barang</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">SMA N 1 SLEMAN</span>
		</a>
        <ul class="side-menu top">
            <li>
                <a href ="{{ url('/user/dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Beranda</span>
                </a>
            </li>
            <li>
                <a href ="{{ url('/pinjam-barang') }}">
                    <i class='bx bxs-package'></i>
                    <span class="text">Pinjam Barang</span>
                </a>
            </li>
            <li>
                 <a href ="{{ url('/pinjam-ruang') }}">
                    <i class='bx bxs-school'></i>
                    <span class="text">Pinjam Ruangan</span>
                </a>
            </li>
            <li class="active">
                <a href ="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Pengajuan</span>
                </a>
            </li>
			<li>
                <a href ="{{ url('/pinjam-saya') }}">
        			<i class='bx bxs-user-detail'></i>
					<span class="text">Peminjaman Saya</span>
				</a>
			</li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="pengaturan.html">
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
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Form Pengajuan Barang</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Beranda</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="userberanda.html">Form Pengajuan Barang</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Tabel Pengajuan</h3>
                        <!-- <a href="{{ url('/userformpengajuan/form') }}"></a> -->
                        <a href="{{ url('/userpengajuan/form') }}" class="btn btn-success">Form Pengajuan</a>
                        <!-- <span class="text">Form Pengajuan</span> -->
                        </a>
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

                        

                        <tbody>
                            <tr>
                                <td> 28-10-2024</td>
                                <td>Siapa Namanya</td>
                                <td>Guru</td>
                                <td>Jenis1</td>
                                <td>Merk**</td>
                                <td>900</td>
                                <td>12.00</td>
                                <td>deskripsi panjang</td>
                            </tr>
                            <tr>
                                <td> 28-10-2024</td>
                                <td>Siapa Namanya</td>
                                <td>Guru</td>
                                <td>Jenis1</td>
                                <td>Merk**</td>
                                <td>900</td>
                                <td>12.00</td>
                                <td>deskripsi panjang</td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
		</main>
    </section>
    <!-- CONTENT -->

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
