    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- ---- -->
    <link href="partialis/partials.css" rel="stylesheet">


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
            <a href="https://ppdb.almiftah.online" target="_blank" class="ppdbatas bg-warning text-dark fw-bold px-3 py-1 rounded-pill shadow ms-auto me-4 text-decoration-none">
                PSB Online
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
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'psb.php' ? 'active' : '' ?>" href="psb.php">Panduan PSB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'rapor/index.php' ? 'active' : '' ?>" href="rapor/index.php">Peraturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'acoun.php' ? 'active' : '' ?>" href="acoun.php">Saya</a>
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
        <a href="/psb.php" class="<?= basename($_SERVER['PHP_SELF']) == 'psb.php' ? 'active' : '' ?>">
            <i class="bi bi-person-lines-fill"></i>
            <small>PSB</small>
        </a>
        <a href="/SK.php" class="<?= basename($_SERVER['PHP_SELF']) == 'SK.php' ? 'active' : '' ?>">
            <i class="bi bi-book"></i>
            <small>Peraturan</small>
        </a>
        <a href="acoun.php" class="<?= basename($_SERVER['PHP_SELF']) == 'acoun.php' ? 'active' : '' ?>">
            <i class="bi bi-person-circle"></i>
            <small>Saya</small>
        </a>
    </div>