<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Flower</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @yield('css-khusus')
    <style>
        html,
        body {
            height: 100%;
        }

        .container-fluid {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .row {
            flex: 1;
        }

        #sidebar {
            height: calc(100% - 56px);
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 15px 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            overflow-y: auto;
            background-color: #FFB6C1 !important;
            border-radius: 0 10px 10px 0;
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
        }

        .nav-link {
            color: #333 !important;
            background-color: #FFD1DC;
            margin-bottom: 8px;
            border-radius: 5px;
            transition: all 0.3s ease;
            padding: 10px 15px;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: #FF69B4;
            color: #fff !important;
        }

        .collapse .nav-link {
            background-color: #FFC0CB;
            margin-left: 20px;
            padding: 8px 15px;
            margin-bottom: 5px;
        }

        .collapse .nav-link:hover,
        .collapse .nav-link.active {
            background-color: #FF1493;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .nav-link[data-bs-toggle="collapse"] {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-link[data-bs-toggle="collapse"] .bi-chevron-down {
            transform: rotate(-90deg);
            transition: transform 0.3s ease;
        }

        .nav-link[aria-expanded="true"] .bi-chevron-down,
        .nav-item.active>.nav-link .bi-chevron-down {
            transform: rotate(0deg);
        }

        .collapse .nav-link::before {
            content: "\2022";
            margin-right: 10px;
        }

        main {
            margin-top: 80px;
        }

        .nav-item.active>.nav-link:hover,
        .nav-item.active>.nav-link[aria-expanded="true"]:hover {
            background-color: #FF1493;
        }

        .nav-item.active>.nav-link {
            background-color: #FF69B4;
            color: #fff !important;
        }

        .nav-item.active .collapse .nav-link:hover {
            background-color: #FF1493;
            color: #fff !important;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-2 p-3"
            style="background-color: #FF69B4; border-radius: 0 0 10px 10px;">
            <div class="d-flex w-100">
                <a class="navbar-brand m-0 text-start me-auto text-white" href="#">PERPUSTAKAAN FLOWER</a>
                <a href="/" class="btn btn-outline-light">Log Out</a>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar ">
            <div class="position-sticky mt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                            href="/dashboard">
                            <i class="bi bi-speedometer2 me-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('masterdata/*') ? 'active' : '' }}">
                        <a class="nav-link" href="#" data-bs-toggle="collapse"
                            data-bs-target="#masterDataCollapse"
                            aria-expanded="{{ Request::is('masterdata/*') ? 'true' : 'false' }}">
                            <i class="bi bi-folder me-2"></i>
                            Master Data
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse {{ Request::is('masterdata/*') ? 'show' : '' }}" id="masterDataCollapse">
                            <ul class="nav flex-column ms-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('masterdata/siswa') ? 'active' : '' }}"
                                        href="/masterdata/siswa">
                                        Data Siswa
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('masterdata/buku') ? 'active' : '' }}"
                                        href="/masterdata/buku">
                                        Data Buku
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('transaksi/*') ? 'active' : '' }}">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#transaksiCollapse"
                            aria-expanded="{{ Request::is('transaksi/*') ? 'true' : 'false' }}">
                            <i class="bi bi-cart me-2"></i>
                            Transaksi
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse {{ Request::is('transaksi/*') ? 'show' : '' }}" id="transaksiCollapse">
                            <ul class="nav flex-column ms-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('transaksi/peminjaman') ? 'active' : '' }}"
                                        href="/transaksi/peminjaman">
                                        Data Peminjaman
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('transaksi/pengembalian') ? 'active' : '' }}"
                                        href="/transaksi/pengembalian">
                                        Data Pengembalian
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('laporan/*') ? 'active' : '' }}">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#laporanCollapse"
                            aria-expanded="{{ Request::is('laporan/*') ? 'true' : 'false' }}">
                            <i class="bi bi-file-earmark-text me-2"></i>
                            Laporan
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse {{ Request::is('laporan/*') ? 'show' : '' }}" id="laporanCollapse">
                            <ul class="nav flex-column ms-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('laporan/bukufavorit') ? 'active' : '' }}"
                                        href="/laporan/bukufavorit">
                                        Buku Favorit
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('laporan/belumpengembalian') ? 'active' : '' }}"
                                        href="/laporan/belumpengembalian">
                                        Belum Pengembalian
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('laporan/bukuperhari') ? 'active' : '' }}"
                                        href="/laporan/bukuperhari">
                                        Laporan Per Hari
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 col-lg-10 ms-sm-auto px-md-4">
            <div class="container">
                @yield('konten-utama')
            </div>
        </main>
    </div>

    <footer class="mt-5 py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">&copy; 2023 Perpustakaan Flower. All rights reserved.</span>
        </div>
    </footer>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
