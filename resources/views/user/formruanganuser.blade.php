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
      <li>
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
      <li class="active">
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
        <!-- <div class="form-input">
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
          <h1>Pinjam Ruangan</h1>
          <ul class="breadcrumb">
            <li>
              <a class="active" href="{{ url('/pinjam-ruangan') }}">Pinjam Ruangan</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
              <a class="active" href="{{ url('/pinjam-ruangan/form') }}">Form Pinjam Ruangan</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- <ul class="box-info">
                <li>
                    <span class="text">
                    </span> -->
      <!-- Main Content -->
      <div class="main-content">
        <div class="container">
          <h2>Form Peminjaman Ruangan</h2>
          <form action="" method="POST">
            <div class="form-layout">
              <div class="left-column">
                <div class="form-group">
                  <label for="nama">Nama <span class="required-star">*</span></label>
                  <input type="text" id="nama" name="nama" required />
                </div>
                <div class="form-group">
                  <label for="email">Email <span class="required-star">*</span></label>
                  <input type="email" id="email" name="email" required />
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan <span class="required-star">*</span></label>
                  <input type="text" id="jabatan" name="jabatan" required />
                </div>
              </div>
              <div class="right-column">
                <div class="form-group">
                  <label for="tanggal">Tanggal <span class="required-star">*</span></label>
                  <input type="date" id="tanggal" name="tanggal" required />
                </div>
                <div class="form-group">
                  <label for="jam_mulai">Jam Mulai <span class="required-star">*</span></label>
                  <select id="jam_mulai" name="jam_mulai" required>
                    <option value="07:00">Jam ke-1 (07:00 - 07:30)</option>
                    <option value="07:30">Jam Ke-2 (07:30 - 08:10)</option>
                    <option value="08:50">Jam Ke-3 (08:50 - 09:30)</option>
                    <option value="09:30">Jam Ke-4 (09:30 - 09:45)</option>
                    <option value="09:45">Istirahat (09:45 - 10:25)</option>
                    <option value="10:25">Jam Ke-5 (10:25 - 11:05)</option>
                    <option value="11:05">Jam Ke-6 (11:05 - 11:45)</option>
                    <option value="11:45">Istirahat (11:45 - 12:30)</option>
                    <option value="12:30">Jam Ke-7 (12:30 - 13:10)</option>
                    <option value="13:10">Jam Ke-8 (13:10 - 13:50)</option>
                    <option value="13:50">Istirahat (13:50 - 14:10)</option>
                    <option value="14:10">Jam Ke-9 (14:10 - 14:50)</option>
                    <option value="14:50">Jam Ke-10 (14:50 - 15:30)</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="jam_selesai">Jam Selesai <span class="required-star">*</span></label>
                  <select id="jam_selesai" name="jam_selesai" required>
                    <option value="07:00">Jam ke-1 (07:00 - 07:30)</option>
                    <option value="07:30">Jam Ke-2 (07:30 - 08:10)</option>
                    <option value="08:50">Jam Ke-3 (08:50 - 09:30)</option>
                    <option value="09:30">Jam Ke-4 (09:30 - 09:45)</option>
                    <option value="09:45">Istirahat (09:45 - 10:25)</option>
                    <option value="10:25">Jam Ke-5 (10:25 - 11:05)</option>
                    <option value="11:05">Jam Ke-6 (11:05 - 11:45)</option>
                    <option value="11:45">Istirahat (11:45 - 12:30)</option>
                    <option value="12:30">Jam Ke-7 (12:30 - 13:10)</option>
                    <option value="13:10">Jam Ke-8 (13:10 - 13:50)</option>
                    <option value="13:50">Istirahat (13:50 - 14:10)</option>
                    <option value="14:10">Jam Ke-9 (14:10 - 14:50)</option>
                    <option value="14:50">Jam Ke-10 (14:50 - 15:30)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group full-width">
              <label for="keperluan">Keperluan <span class="required-star">*</span></label>
              <textarea id="keperluan" name="keperluan" required></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
      </div>
      </li>
      </ul>

    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->


  <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>