<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user.css') }}">

    <title>Pengaturan Akun</title>
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
                <a href="{{ url('/pinjam-barang') }}">
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
                <a href="#">
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
                <a href="#">
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
            <a href="#" class="nav-link">Kategori</a>
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
                    <h1>Beranda</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a class="active" href="{{ url('/user/dashboard') }}">Beranda</a>
                        </li>

                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>
            <div class="head-title">
                <div class="left">
                    <h1>Pengaturan Akun</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a class="active" href="{{ url('/user/dashboard') }}">Beranda</a>
                        </li>
                        <li><a href="#">Pengaturan</a></li>
                    </ul>
                </div>
            </div>

            <div class="box-info">
                <div class="account-info">
                    <h3>Informasi Akun</h3>
                    <ul>
                        <li><strong>Nama:</strong> {{ $userData['nama'] }}</li>
                        <li><strong>Email:</strong> {{ $userData['email'] }}</li>
                        <li><strong>Role:</strong> {{ $userData['role'] }}</li>
                    </ul>
                </div>
            </div>

            <div class="logout-button">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class='bx bxs-log-out-circle'></i> Keluar
                    </button>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>