<nav class="navbar navbar-expand-lg bg-success top">
    <div class="container d-flex align-items-center">
        <!-- Logo dan Nama Almiftah -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="img/logoAlmiftah.png" alt="Logo" width="50" height="50" class="rounded"
                style="filter: drop-shadow(0px 0px 2px rgb(0, 0, 0));">
            <span class="fw-bold text-white ms-2" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1);">Al MIFTAH</span>
        </a>

        <!-- Tulisan "Daftar PPDB" dengan link -->
        <a href="https://ppdb.almiftah.online" target="_blank" class="bg-warning text-dark fw-bold px-3 py-1 rounded-pill shadow ms-auto me-4 text-decoration-none">
            PPDB Online
        </a>


        <!-- Tombol Toggle untuk Offcanvas -->
        <button class="navbar-toggler shadow-none bg-white p-2 text-dark bg-opacity-75" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navbar (Hanya tampil di layar besar) -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav d-flex gap-3 text-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ppdb.php">Panduan PPDB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="SK.php">Peraturan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar Offcanvas (Muncul saat layar kecil) -->
<div class="offcanvas offcanvas-start bg-success text-white" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close text-reset bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav flex-column gap-2">
            <li class="nav-item border-bottom border-white">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item border-bottom border-white">
                <a class="nav-link text-white" href="about.php">About</a>
            </li>
            <li class="nav-item border-bottom border-white">
                <a class="nav-link text-white" href="ppdb.php">Panduan PPDB</a>
            </li>
            <li class="nav-item border-bottom border-white">
                <a class="nav-link text-white" href="SK.php">Peraturan</a>
            </li>
        </ul>
    </div>
</div>