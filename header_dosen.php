<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Dosen - Sistem Skripsi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php
    function isActive($page) {
        return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
    }
    ?>

    <nav class="navbar" style="border-bottom: 2px solid var(--secondary);">
        <div class="container nav-content">
            <a href="dashboard_dosen.php" class="brand">
                <i class="fa-solid fa-graduation-cap" style="color: var(--secondary);"></i>
                Thesis<span>Dosen</span>
            </a>
            
            <div class="nav-links">
                <a href="dashboard_dosen.php" class="nav-link <?= isActive('dashboard_dosen.php') ?>">Dashboard</a>
                <a href="dosen_judul.php" class="nav-link <?= isActive('dosen_judul.php') ?>">Validasi Judul</a>
                <a href="dosen_bimbingan.php" class="nav-link <?= isActive('dosen_bimbingan.php') ?>">Bimbingan</a>
                <a href="dosen_sidang.php" class="nav-link <?= isActive('dosen_sidang.php') ?>">Jadwal Sidang</a>
            </div>

            <div class="user-profile" style="background: var(--secondary-light); color: var(--secondary);">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span>Dr. Dosen</span>
            </div>
        </div>
    </nav>

    <main>
