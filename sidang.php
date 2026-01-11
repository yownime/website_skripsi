<?php include 'header.php'; 

// Simulate state check
$isScheduled = isset($_GET['state']) && $_GET['state'] == 'scheduled';
?>

<div class="container">
    
    <?php if (!$isScheduled): ?>
    <!-- STATE 1: CHECKLIST & REGISTRATION -->
    <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <h1 style="color: var(--primary); margin-bottom: 10px;">Sidang Skripsi</h1>
        <p style="font-size: 1.1rem; color: var(--text-muted);">
            Tahap akhir perjuanganmu. Pastikan semua persyaratan telah terpenuhi untuk mendaftar sidang.
        </p>
    </div>

    <div class="card" style="max-width: 800px; margin: 0 auto; padding: 40px;">
        <h3 style="margin-bottom: 25px; border-bottom: 2px solid var(--border); padding-bottom: 10px;">
            Checklist Persyaratan Sidang
        </h3>

        <div style="display: grid; gap: 15px; margin-bottom: 30px;">
            <div style="display: flex; align-items: center; gap: 15px;">
                <div style="width: 24px; height: 24px; background: var(--secondary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;"><i class="fa-solid fa-check"></i></div>
                <span>Lulus Seminar Hasil (Min. Nilai B)</span>
            </div>
            
            <div style="display: flex; align-items: center; gap: 15px;">
                <div style="width: 24px; height: 24px; background: var(--secondary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;"><i class="fa-solid fa-check"></i></div>
                <span>Bebas Pustaka (Perpustakaan Pusat & Fakultas)</span>
            </div>

            <div style="display: flex; align-items: center; gap: 15px;">
                <div style="width: 24px; height: 24px; background: var(--secondary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center; font-size: 0.8rem;"><i class="fa-solid fa-check"></i></div>
                <span>Persetujuan Dosen Pembimbing untuk Sidang</span>
            </div>

            <!-- TOEFL ITEM -->
             <div style="display: flex; align-items: center; gap: 15px;">
                <div style="width: 24px; height: 24px; border: 2px solid #E11D48; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #E11D48;">
                    <i class="fa-solid fa-times"></i>
                </div>
                <div style="flex: 1; display: flex; justify-content: space-between; align-items: center;">
                    <span style="color: var(--text-main);">Score Toefl >= 450 (Belum Terverifikasi)</span>
                    <a href="upload_toefl.php" class="btn btn-outline" style="padding: 2px 10px; font-size: 0.8rem;">
                        <i class="fa-solid fa-upload"></i> Upload
                    </a>
                </div>
            </div>
        </div>

        <div class="alert badge-secondary" style="margin-bottom: 30px; text-align: center; color: var(--text-muted); background: #f8fafc; border: 1px solid var(--border);">
            <i class="fa-solid fa-lock"></i> Pendaftaran sidang terkunci sampai semua syarat terpenuhi.
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <button class="btn btn-outline" style="border-style: dashed;" disabled>Upload Susulan Dokumen</button>
            <button class="btn btn-primary" disabled style="opacity: 0.7; cursor: not-allowed;">Daftar Sidang Sekarang</button>
        </div>
    </div>

    <?php else: ?>
    <!-- STATE 2: SCHEDULED VIEW -->
    <div class="card" style="text-align: center; max-width: 800px; margin: 0 auto; padding: 50px 20px;">
        <div style="width: 80px; height: 80px; background: var(--secondary-light); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 2.5rem;">
            <i class="fa-solid fa-calendar-check"></i>
        </div>
        <h1 style="color: var(--secondary); margin-bottom: 10px;">Jadwal Sidang Diterbitkan!</h1>
        <p style="color: var(--text-muted); margin-bottom: 40px;">Selamat! Pendaftaranmu telah diterima. Persiapkan dirimu sebaik mungkin.</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: left; margin-bottom: 40px;">
            <div style="background: var(--bg-body); padding: 20px; border-radius: var(--radius-sm); border-left: 4px solid var(--primary);">
                <div style="font-size: 0.85rem; color: var(--text-muted);">Hari & Tanggal</div>
                <div style="font-size: 1.2rem; font-weight: 700;">Kamis, 20 Jan 2026</div>
            </div>
            <div style="background: var(--bg-body); padding: 20px; border-radius: var(--radius-sm); border-left: 4px solid var(--primary);">
                <div style="font-size: 0.85rem; color: var(--text-muted);">Waktu</div>
                <div style="font-size: 1.2rem; font-weight: 700;">09:00 - 11:00 WIB</div>
            </div>
            <div style="background: var(--bg-body); padding: 20px; border-radius: var(--radius-sm); border-left: 4px solid var(--primary);">
                <div style="font-size: 0.85rem; color: var(--text-muted);">Lokasi</div>
                <div style="font-size: 1.2rem; font-weight: 700;">R. Sidang Utama</div>
            </div>
        </div>

        <h3 style="margin-bottom: 20px; text-align: left;">Dewan Penguji</h3>
        <div style="display: flex; flex-direction: column; gap: 15px; text-align: left; margin-bottom: 40px;">
            <div style="display: flex; align-items: center; gap: 15px; padding: 15px; border: 1px solid var(--border); border-radius: var(--radius-sm);">
                <div style="width: 40px; height: 40px; background: var(--primary-light); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-user-tie"></i></div>
                <div>
                    <div style="font-weight: 600;">Prof. Dr. Budi Santoso, M.Kom</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Ketua Penguji</div>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 15px; padding: 15px; border: 1px solid var(--border); border-radius: var(--radius-sm);">
                 <div style="width: 40px; height: 40px; background: var(--bg-body); color: var(--text-muted); border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-user"></i></div>
                <div>
                    <div style="font-weight: 600;">Siti Aminah, S.T., M.T.</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Penguji 1</div>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 15px; padding: 15px; border: 1px solid var(--border); border-radius: var(--radius-sm);">
                 <div style="width: 40px; height: 40px; background: var(--bg-body); color: var(--text-muted); border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-solid fa-user"></i></div>
                <div>
                    <div style="font-weight: 600;">Rudi Hermawan, M.Cs</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted);">Penguji 2</div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" onclick="window.print()">
            <i class="fa-solid fa-print"></i> Cetak Kartu Sidang
        </button>
    </div>
    <?php endif; ?>

</div>

<?php include 'footer.php'; ?>
