<?php include 'header.php'; ?>

<div class="container">
    <div style="margin-bottom: 30px;">
        <h1>Dashboard Mahasiswa</h1>
        <p style="color: var(--text-muted);">Pantau progres skripsimu secara real-time.</p>
    </div>

    <!-- Timeline / Stepper -->
    <div class="card" style="margin-bottom: 40px; border-top: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Progres Skripsi Anda</h3>
        
        <div class="stepper">
            <!-- Step 1: Account (Done) -->
            <div class="step-item completed">
                <div class="step-circle"><i class="fa-solid fa-check"></i></div>
                <div class="step-label">Akun Aktif</div>
            </div>

            <!-- Step 2: Title (Active) -->
            <div class="step-item active">
                <div class="step-circle">2</div>
                <div class="step-label">Pengajuan Judul</div>
            </div>

            <!-- Step 3: Proposal -->
            <div class="step-item">
                <div class="step-circle">3</div>
                <div class="step-label">Sem. Proposal</div>
            </div>

            <!-- Step 4: Guidance -->
            <div class="step-item">
                <div class="step-circle">4</div>
                <div class="step-label">Bimbingan</div>
            </div>

            <!-- Step 5: Results -->
            <div class="step-item">
                <div class="step-circle">5</div>
                <div class="step-label">Sem. Hasil</div>
            </div>

            <!-- Step 6: Defense -->
            <div class="step-item">
                <div class="step-circle"><i class="fa-solid fa-flag-checkered"></i></div>
                <div class="step-label">Sidang Akhir</div>
            </div>
        </div>

        <div class="alert badge-warning" style="display: inline-block; padding: 10px 20px;">
            <i class="fa-solid fa-info-circle"></i> Status Saat Ini: <strong>Menunggu Pengajuan Judul</strong>
        </div>
    </div>

    <!-- Action Cards -->
    <h3 style="margin-bottom: 20px;">Menu Cepat</h3>
    <div class="grid-dashboard">
        <!-- Card 1: Pengajuan Judul -->
        <div class="card">
            <div class="stat-card">
                <div class="stat-icon bg-orange-light">
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <div>
                    <h4>Ajukan Judul</h4>
                    <p style="font-size: 0.9rem; color: var(--text-muted);">Mulai penyusunan skripsimu di sini.</p>
                </div>
            </div>
            <a href="submission.php" class="btn btn-primary" style="width: 100%; margin-top: 20px;">
                Buat Pengajuan <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <!-- Card 2: Jadwal Bimbingan -->
        <div class="card">
            <div class="stat-card">
                <div class="stat-icon bg-green-light">
                    <i class="fa-regular fa-calendar-check"></i>
                </div>
                <div>
                    <h4>Jadwal Bimbingan</h4>
                    <p style="font-size: 0.9rem; color: var(--text-muted);">Cek ketersediaan dosen pembimbing.</p>
                </div>
            </div>
            <button class="btn btn-outline" style="width: 100%; margin-top: 20px;" disabled>
                Belum Tersedia
            </button>
        </div>

        <!-- Card 3: Arsip Skripsi -->
        <div class="card">
            <div class="stat-card">
                <div class="stat-icon" style="background: #E0F2FE; color: #0284C7;">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h4>Bank Judul</h4>
                    <p style="font-size: 0.9rem; color: var(--text-muted);">Lihat referensi judul terdahulu.</p>
                </div>
            </div>
            <a href="#" class="btn btn-secondary" style="width: 100%; margin-top: 20px;">
                Lihat Arsip
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
