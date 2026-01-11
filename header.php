<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Skripsi - Universitas</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php
    // Simple helper to check active page
    function isActive($page) {
        return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
    }
    
    // Simulate user session for UI demo
    $isLoggedIn = basename($_SERVER['PHP_SELF']) !== 'index.php';
    ?>

    <?php if($isLoggedIn): ?>
    <nav class="navbar">
        <div class="container nav-content">
            <a href="dashboard.php" class="brand">
                <i class="fa-solid fa-graduation-cap"></i>
                Thesis<span>Manager</span>
            </a>
            
            <div class="nav-links">
                <a href="dashboard.php" class="nav-link <?= isActive('dashboard.php') ?>">Dashboard</a>
                <a href="submission.php" class="nav-link <?= isActive('submission.php') ?>">Pengajuan Judul</a>
                <a href="guidance.php" class="nav-link <?= isActive('guidance.php') ?>">Bimbingan</a>
                <a href="semhas.php" class="nav-link <?= isActive('semhas.php') ?>">Seminar</a>
                <a href="sidang.php" class="nav-link <?= isActive('sidang.php') ?>">Sidang</a>
            </div>

            <div class="user-profile">
                <i class="fa-regular fa-user-circle"></i>
                <span>Mahasiswa</span>
            </div>
        </div>
    </nav>
    <?php endif; ?>

    <main>
