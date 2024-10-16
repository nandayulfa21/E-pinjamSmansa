<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('assets/user.css') }}">

    <title>Checkout</title>
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
                    <h1>Checkout Barang</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Beranda</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Checkout Barang</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Konten form dari userformbarang.html -->
            <div class="container">
                <div class="container" style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                    <!-- Ringkasan Produk -->
                    <section class="product-summary" style="margin-bottom: 30px;">
                        <h2 style="margin-bottom: 15px; color: #5243d8; font-size: 24px; border-bottom: 2px solid #4c54be; padding-bottom: 5px;">Barang yang Dipinjam</h2>
                        <div class="product-item" data-subtotal="200000" style="display: flex; align-items: center; border: 1px solid #ddd; padding: 15px; border-radius: 5px; margin-bottom: 15px; position: relative;">
                            <img src="https://via.placeholder.com/100" alt="Produk 1" style="width: 100px; height: 100px; object-fit: cover; margin-right: 20px; border-radius: 5px;">
                            <div class="product-details" style="flex: 1;">
                                <h3 style="margin-bottom: 10px; font-size: 18px;">Nama Produk 1</h3>
                                <p style="margin-bottom: 5px; font-size: 14px;">Harga: Rp 100.000 / hari</p>
                                <p style="margin-bottom: 5px; font-size: 14px;">Durasi: 2 hari</p>
                                <p style="margin-bottom: 5px; font-size: 14px;"><strong>Total: Rp <span class="total">200.000</span></strong></p>
                                <div class="quantity-controls" style="display: flex; align-items: center; margin-top: 10px;">
                                    <button class="decrease-btn" style="width: 30px; height: 30px; background-color: #5837db; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease;">-</button>
                                    <span class="quantity" style="margin: 0 10px; font-size: 16px;">1</span>
                                    <button class="increase-btn" style="width: 30px; height: 30px; background-color: #5837db; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease;">+</button>
                                </div>
                            </div>
                            <button class="delete-btn" title="Hapus Barang" style="position: absolute; top: 15px; right: 15px; background: none; border: none; color: #ff4d4f; cursor: pointer; font-size: 20px; transition: color 0.3s ease;"><i class="fas fa-trash"></i></button>
                        </div>
                        
                        <div class="product-item" data-subtotal="450000" style="display: flex; align-items: center; border: 1px solid #ddd; padding: 15px; border-radius: 5px; margin-bottom: 15px; position: relative;">
                            <img src="https://via.placeholder.com/100" alt="Produk 2" style="width: 100px; height: 100px; object-fit: cover; margin-right: 20px; border-radius: 5px;">
                            <div class="product-details" style="flex: 1;">
                                <h3 style="margin-bottom: 10px; font-size: 18px;">Nama Produk 2</h3>
                                <p style="margin-bottom: 5px; font-size: 14px;">Harga: Rp 150.000 / hari</p>
                                <p style="margin-bottom: 5px; font-size: 14px;">Durasi: 3 hari</p>
                                <p style="margin-bottom: 5px; font-size: 14px;"><strong>Total: Rp <span class="total">450.000</span></strong></p>
                                <div class="quantity-controls" style="display: flex; align-items: center; margin-top: 10px;">
                                    <button class="decrease-btn" style="width: 30px; height: 30px; background-color: #5837db; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease;">-</button>
                                    <span class="quantity" style="margin: 0 10px; font-size: 16px;">1</span>
                                    <button class="increase-btn" style="width: 30px; height: 30px; background-color: #5837db; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease;">+</button>
                                </div>
                            </div>
                            <button class="delete-btn" title="Hapus Barang" style="position: absolute; top: 15px; right: 15px; background: none; border: none; color: #ff4d4f; cursor: pointer; font-size: 20px; transition: color 0.3s ease;"><i class="fas fa-trash"></i></button>
                        </div>
                    </section>
            
                    <!-- Tombol Checkout -->
                     <a href="#">
                    <button type="button" class="checkout-btn" style="width: 100%; padding: 15px; background-color: #4628c0; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease; margin-top: 20px;">Selesaikan Peminjaman</button>
                    </a>
                </div>
                <!-- JavaScript untuk Interaktivitas -->
                <script>
                    // Event Listener untuk tombol hapus
                    document.querySelectorAll('.delete-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            this.parentElement.remove();
                            // Jika Anda ingin melakukan sesuatu setelah penghapusan, tambahkan di sini
                        });
                    });
            
                    // Event Listener untuk tombol tambah dan kurang
                    document.querySelectorAll('.increase-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const quantitySpan = this.previousElementSibling;
                            let quantity = parseInt(quantitySpan.innerText);
                            quantity++;
                            quantitySpan.innerText = quantity;
            
                            // Update total per item
                            const productItem = this.closest('.product-item');
                            const hargaText = productItem.querySelector('.product-details p').innerText;
                            const harga = parseInt(hargaText.replace(/[^0-9]/g, ''));
                            const durasiText = productItem.querySelectorAll('.product-details p')[1].innerText;
                            const durasi = parseInt(durasiText.replace(/[^0-9]/g, ''));
                            const total = harga * durasi * quantity;
                            productItem.querySelector('.total').innerText = total.toLocaleString('id-ID');
                        });
                    });
            
                    document.querySelectorAll('.decrease-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const quantitySpan = this.nextElementSibling;
                            let quantity = parseInt(quantitySpan.innerText);
                            if (quantity > 1) {
                                quantity--;
                                quantitySpan.innerText = quantity;
            
                                // Update total per item
                                const productItem = this.closest('.product-item');
                                const hargaText = productItem.querySelector('.product-details p').innerText;
                                const harga = parseInt(hargaText.replace(/[^0-9]/g, ''));
                                const durasiText = productItem.querySelectorAll('.product-details p')[1].innerText;
                                const durasi = parseInt(durasiText.replace(/[^0-9]/g, ''));
                                const total = harga * durasi * quantity;
                                productItem.querySelector('.total').innerText = total.toLocaleString('id-ID');
                            }
                        });
                    });
            
                    // Anda dapat menambahkan fungsionalitas untuk tombol checkout di sini
                    document.querySelector('.checkout-btn').addEventListener('click', function() {
                        // Contoh: Menampilkan alert
                        alert('Peminjaman telah diselesaikan!');
                        // Tambahkan logika checkout sesuai kebutuhan
                    });
                </script>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>