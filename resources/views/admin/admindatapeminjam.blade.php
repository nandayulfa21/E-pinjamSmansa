<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="public/assets/admin.css">

    <title>Data Peminjam</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <!-- <a href="#" class="brand">
            <img src="https://scontent.fjog8-1.fna.fbcdn.net/v/t39.30808-6/348868961_1524281224646474_6510309172757669624_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=rtrtcrCtOb4Q7kNvgHtWnos&_nc_ht=scontent.fjog8-1.fna&_nc_gid=Ad-Z6TmaIl9RycO4hoXUqkH&oh=00_AYDojjWSFui8ZR2SaltH2git5SyhO49V1_MTQ-zIA5LtwA&oe=66E97E28" alt="Logo SMAN 1 Sleman" class="logo-smansa">
            <span class="text">SMA N 1 SLEMAN</span>
        </a> -->
        <a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">SMA N 1 SLEMAN</span>
		</a>
        <ul class="side-menu top">
            <li>
                <a href="">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Beranda</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-package'></i>
                    <span class="text">Data Barang</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-school'></i>
                    <span class="text">Data Ruangan</span>
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class='bx bxs-group'></i>
                    <span class="text">Data Peminjam</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bxs-report'></i>
                    <span class="text">Laporan</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class='bx bx-clipboard'></i>
                    <span class="text">Pengajuan</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="">
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
                    <h1>Data Peminjam</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Beranda</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Data Peminjam</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a> -->
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-package'></i>
                    <span class="text">
                        <a href="admindatapeminjambarang.html" class="btn btn-success" style="margin: 5px;">Barang</a>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-school'></i>
                    <span class="text">
                        <a href="admindatapeminjamruang.html" class="btn btn-success" style="margin: 5px;">Ruangan</a>
                    </span>
                </li>
                <!-- <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>7 Orang</h3>
                        <p>Total Peminjam</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-clipboard'></i>
                    <span class="text">
                        <h3>7 Ajuan</h3>
                        <p>Total Pengajuan</p>
                    </span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Orders</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">Process</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                <!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main> -->
                <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>