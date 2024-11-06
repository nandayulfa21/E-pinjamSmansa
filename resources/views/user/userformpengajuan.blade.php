<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('assets/user.css') }}">
  <title>Pinjam Ruangan</title>
  <style>
    /* CSS untuk notifikasi mengambang */
    .toast {
        position: fixed;
        top: 50px; /* Mengatur posisi sedikit lebih rendah */
        right: 20px; /* Mengatur posisi ke kanan */
        background-color: #4caf50;
        color: white;
        padding: 20px; /* Memperbesar padding */
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        display: none; /* Awalnya sembunyikan */
        z-index: 1000;
        transition: opacity 0.5s ease, top 0.5s ease; /* Animasi */
        font-size: 16px; /* Memperbesar ukuran font */
        width: 300px; /* Memperbesar lebar notifikasi */
    }

    /* CSS untuk notifikasi kesalahan */
    .error-toast {
        position: fixed;
        top: 50px; /* Mengatur posisi sedikit lebih rendah */
        right: 20px; /* Mengatur posisi ke kanan */
        background-color: #f44336; /* Warna merah */
        color: white;
        padding: 20px; /* Memperbesar padding */
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        display: none; /* Awalnya sembunyikan */
        z-index: 1000;
        transition: opacity 0.5s ease; /* Animasi */
        font-size: 16px; /* Memperbesar ukuran font */
        width: 300px; /* Memperbesar lebar notifikasi */
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
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
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

            <h2>Form Pengajuan Barang</h2>
            <div class="main-content">
                <div class="container">
                    <!-- Notifikasi mengambang -->
                    <div id="successToast" class="toast">Form berhasil dikirim!</div>
                    <div id="errorMessage" class="error-toast">Terjadi kesalahan, silakan coba lagi.</div>

                    <!-- Form dengan AJAX -->
                    <form id="pengajuanForm" method="POST" action="{{ url('/userpengajuan/form') }}">
                        @csrf
                        <div class="form-layout">
                            <div class="left-column">
                                <div class="form-group">
                                    <label for="tanggal_pengajuan">Tanggal Pengajuan <span class="required-star">*</span></label>
                                    <input type="date" id="tanggal_pengajuan" name="tanggal_pengajuan" required />
                                </div>    
                                <div class="form-group">
                                    <label for="nama">Nama <span class="required-star">*</span></label>
                                    <input type="text" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_barang">Jenis Barang <span class="required-star">*</span></label>
                                    <input type="text" id="jenis_barang" name="jenis_barang" required />
                                </div>
                                <div class="form-group">
                                    <label for="satuan_barang">Satuan Barang <span class="required-star">*</span></label>
                                    <input type="text" id="satuan_barang" name="satuan_barang" required />
                                </div>
                            </div>
                            <div class="right-column">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan <span class="required-star">*</span></label>
                                    <input type="text" id="jabatan" name="jabatan" required />
                                </div>
                                <div class="form-group">
                                    <label for="merk_spesifikasi">Merk/ Spesifikasi <span class="required-star">*</span></label>
                                    <input type="text" id="merk_spesifikasi" name="merk_spesifikasi" required />
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah <span class="required-star">*</span></label>
                                    <input type="text" id="jumlah" name="jumlah" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label for="keperluan">Keperluan <span class="required-star">*</span></label>
                            <textarea id="keperluan" name="keterangan" required></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </section>

    <!-- Script AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#pengajuanForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah submit form standar

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(), // Ambil data form
                success: function(response) {
                    // Tampilkan notifikasi mengambang
                    $('#successToast').css('display', 'block').css('top', '50px').animate({ opacity: 1 }, 500);
                    $('#pengajuanForm')[0].reset(); // Reset form
                    setTimeout(function() {
                        $('#successToast').animate({ opacity: 0 }, 500, function() {
                            $(this).css('display', 'none').css('top', '0px'); // Sembunyikan setelah animasi
                        });
                    }, 3000);
                },
                error: function(response) {
                    $('#errorMessage').css('display', 'block').animate({ opacity: 1 }, 500);
                    setTimeout(function() {
                        $('#errorMessage').animate({ opacity: 0 }, 500, function() {
                            $(this).css('display', 'none'); // Sembunyikan setelah animasi
                        });
                    }, 3000);
                }
            });
        });
    </script>
</body>
</html>
