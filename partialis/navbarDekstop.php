    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- ---- -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #28a745;
            border-top: 1px solid #444;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            z-index: 999;
        }

        .bottom-nav a {
            color: #ccc;
            text-decoration: none;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .bottom-nav a.active,
        .bottom-nav a:hover {
            color: #fbff07ff;
        }

        .bottom-nav i {
            font-size: 1.4rem;
        }

        body {
            padding-bottom: 70px;
            /* supaya konten tidak tertutup navbar */
        }

        /* nav atass */
        .navbar .nav-link.active {
            background-color: #ffc107;
            /* kuning Bootstrap */
            color: #000 !important;
            /* biar kontras */
            border-radius: 0.5rem;
            font-weight: bold;
        }
    </style>

    <!-- Bottom Navigation -->

    <nav class="navbar navbar-expand-lg  top" style="background-color: #28a745">
        <div class="container d-flex align-items-center">
            <!-- Logo dan Nama Almiftah -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/logoAlmiftah.png" alt="Logo" width="50" height="50" class="rounded"
                    style="filter: drop-shadow(0px 0px 2px rgba(0, 0, 0, 1));">
                <span class="fw-bold text-white ms-2" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);">Al MIFTAH</span>
            </a>

            <!-- Tulisan "Daftar PPDB" dengan link -->
            <a href="https://ppdb.almiftah.online" target="_blank" class="bg-warning text-dark fw-bold px-3 py-1 rounded-pill shadow ms-auto me-4 text-decoration-none">
                PPDB Online
            </a>

            <!-- Menu Navbar (Hanya tampil di layar besar) -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex gap-3 text-center">
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'ppdb.php' ? 'active' : '' ?>" href="ppdb.php">Panduan PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'rapor/index.php' ? 'active' : '' ?>" href="rapor/index.php">Peraturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : '' ?>" href="saya.php">Saya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar Offcanvas (Muncul saat layar kecil) -->
    <div class="bottom-nav d-lg-none">
        <a href="/index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
            <i class="bi bi-house-door-fill"></i>
            <small>Home</small>
        </a>
        <a href="/about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
            <i class="bi bi-building-fill-exclamation"></i>
            <small>About</small>
        </a>
        <a href="/ppdb.php" class="<?= basename($_SERVER['PHP_SELF']) == 'ppdb.php' ? 'active' : '' ?>">
            <i class="bi bi-person-lines-fill"></i>
            <small>PPDB</small>
        </a>
        <a href="/sk.php" class="<?= basename($_SERVER['PHP_SELF']) == 'sk.php' ? 'active' : '' ?>">
            <i class="bi bi-book"></i>
            <small>Peraturan</small>
        </a>
        <a href="acoun.php" class="<?= basename($_SERVER['PHP_SELF']) == 'acoun.php' ? 'active' : '' ?>">
            <i class="bi bi-person-circle"></i>
            <small>Saya</small>
        </a>
    </div>