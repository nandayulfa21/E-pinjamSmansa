<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('assets/user.css') }}">

  <title>Pinjam Ruangan </title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">SMA N 1 SLEMAN</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="{{ url('/user/dashboard') }}">
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
                <a href="{{ url('/pinjam-ruangan') }}">
                    <i class='bx bxs-school'></i>
                    <span class="text">Pinjam Ruangan</span>
                </a>
            </li>
            <li>
                <a href ="{{ url('/userpengajuan') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Pengajuan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/peminjaman-saya') }}">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Peminjaman Saya</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="{{ url('/userpengaturan') }}">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR --><!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">SMA N 1 SLEMAN</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{ url('/user/dashboard') }}">
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
                <a href="{{ url('/pinjam-ruangan') }}">
                    <i class='bx bxs-school'></i>
                    <span class="text">Pinjam Ruangan</span>
                </a>
            </li>
            <li class="active">
                <a href ="{{ url('/userpengajuan') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Pengajuan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/peminjaman-saya') }}">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Peminjaman Saya</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="{{ url('/userpengaturan') }}">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
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
              <!--  <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div> -->
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
                <!-- <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a> -->
            </div>
            <h2>Form Pengajuan Barang</h2>
            <div class="main-content">
            <div class="container">

            <form action="{{ url('/userpengajuan/form') }}" method="POST">

    @csrf <!-- Token untuk melindungi dari CSRF -->
    <div class="form-layout">
        <div class="left-column">
            <div class="form-group">
                <label for="nama">Nama <span class="required-star">*</span></label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jenisbarang">Jenis Barang <span class="required-star">*</span></label>
                <input type="text" id="jenisbarang" name="jenisbarang" required />
            </div>
            <div class="form-group">
                <label for="satuanbarang">Satuan Barang <span class="required-star">*</span></label>
                <input type="text" id="satuanbarang" name="satuanbarang" required />
            </div>
        </div>
        <div class="right-column">
            <div class="form-group">
                <label for="jabatan">Jabatan <span class="required-star">*</span></label>
                <input type="text" id="jabatan" name="jabatan" required />
            </div>
            <div class="form-group">
                <label for="spesifikasi">Merk/ Spesifikasi <span class="required-star">*</span></label>
                <input type="text" id="spesifikasi" name="spesifikasi" required />
            </div>
        </div>
    </div>
    <div class="form-group full-width">
        <label for="keperluan">Keperluan <span class="required-star">*</span></label>
        <textarea id="keperluan" name="keperluan" required></textarea>
    </div>

    <button type="submit">Submit</button>

    <form action="{{ route('pengajuan.store') }}" method="POST">

    <!-- <button type="submit">Submit</button> -->
    @csrf
   
</form>


        </div>
            
            
		</main>
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>