<style>
    .bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #212529;
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
        color: #0d6efd;
    }

    .bottom-nav i {
        font-size: 1.4rem;
    }

    body {
        padding-bottom: 70px; /* supaya konten tidak tertutup navbar */
    }
</style>

<!-- Bottom Navigation -->
<div class="bottom-nav">
    <a href="/index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
        <i class="bi bi-house-door"></i>
        <small>Home</small>
    </a>
    <a href="/agenda.php" class="<?= basename($_SERVER['PHP_SELF']) == 'agenda.php' ? 'active' : '' ?>">
        <i class="bi bi-calendar-event"></i>
        <small>Agenda</small>
    </a>
    <a href="/qosidah.php" class="<?= basename($_SERVER['PHP_SELF']) == 'qosidah.php' ? 'active' : '' ?>">
        <i class="bi bi-music-note-list"></i>
        <small>Qosidah</small>
    </a>
    <a href="/404.html" class="<?= basename($_SERVER['PHP_SELF']) == '404.html' ? 'active' : '' ?>">
        <i class="bi bi-moon-stars"></i>
        <small>Sholat</small>
    </a>
    <a href="admin/dashboard.php" class="<?= basename($_SERVER['PHP_SELF']) == '../admin/dashboard.php' ? 'active' : '' ?>">
        <i class="bi bi-person-circle"></i>
        <small>Admin</small>
    </a>
</div>


