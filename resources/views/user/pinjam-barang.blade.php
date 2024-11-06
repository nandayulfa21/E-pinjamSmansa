<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user.css') }}">

    <title>Peminjaman Barang </title>
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
                <a href="{{ url('/user/dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Beranda</span>
                </a>
            </li>
            <li class="active">
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
                    <h1>Pinjam Barang</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a class="active" href="{{ url('/user/dashboard') }}">Beranda</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="{{ url('/pinjam-barang') }}">Pinjam Barang</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>

            <div class="row">
                <!-- Start of card 1 -->
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <h5 class="card-title">Kode Barang 1</h5>
                        <img src="https://i.pinimg.com/474x/48/7b/89/487b89e152debd3704f055e0c8e431c0.jpg" class="card-img-top" alt="Gambar Barang 1">
                        <div class="card-body">
                            <h3 class="card-text"><strong>Nama Barang 1</strong></h3>
                            <p class="card-text">Deskripsi 1</p>
                            <p class="card-text"><strong>Stok: </strong> 78</p>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="{{ url('/userkeranjang') }}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
                <!-- End of card 1 -->

                <!-- Start of card 2 -->
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <h5 class="card-title">Kode Barang 2</h5>
                        <img src="https://i.pinimg.com/474x/48/7b/89/487b89e152debd3704f055e0c8e431c0.jpg" class="card-img-top" alt="Gambar Barang 2">
                        <div class="card-body">
                            <h3 class="card-text"><strong>Nama Barang 2</strong></h3>
                            <p class="card-text">Deskripsi 2</p>
                            <p class="card-text"><strong>Stok: </strong> 60</p>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="{{ url('/userkeranjang') }}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
                <!-- End of card 2 -->

                <!-- Start of card 3 -->
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <h5 class="card-title">Kode Barang 3</h5>
                        <img src="https://i.pinimg.com/474x/48/7b/89/487b89e152debd3704f055e0c8e431c0.jpg" class="card-img-top" alt="Gambar Barang 3">
                        <div class="card-body">
                            <h3 class="card-text"><strong>Nama Barang 3</strong></h3>
                            <p class="card-text">Deskripsi 3</p>
                            <p class="card-text"><strong>Stok: </strong> 45</p>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="{{ url('/userkeranjang') }}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
                <!-- End of card 3 -->

                <!-- Start of card 4 -->
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <h5 class="card-title">Kode Barang 4</h5>
                        <img src="https://i.pinimg.com/474x/48/7b/89/487b89e152debd3704f055e0c8e431c0.jpg" class="card-img-top" alt="Gambar Barang 4">
                        <div class="card-body">
                            <h3 class="card-text"><strong>Nama Barang 4</strong></h3>
                            <p class="card-text">Deskripsi 4</p>
                            <p class="card-text"><strong>Stok: </strong> 90</p>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="{{ url('/userkeranjang') }}" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
                <!-- End of card 4 -->
            </div>

            </div>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>