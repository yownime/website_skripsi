<?php include 'header_dosen.php'; ?>

<div class="container">
    <div style="margin-bottom: 30px;">
        <h1>Validasi Judul Skripsi</h1>
        <p style="color: var(--text-muted);">Daftar pengajuan judul mahasiswa yang memilih Anda sebagai calon pembimbing.</p>
    </div>

    <!-- Title Proposal Card -->
    <div class="card" style="margin-bottom: 30px; border-left: 5px solid var(--primary);">
        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
            <div>
                <h3 style="color: var(--primary); margin-bottom: 5px;">Rancang Bangun Sistem Smart Home Berbasis IoT</h3>
                <div style="font-size: 0.9rem; color: var(--text-muted);">
                    <i class="fa-solid fa-user"></i> <strong>Mahasiswa:</strong> Budi Santoso (12345678) 
                    <span style="margin: 0 10px;">|</span> 
                    <i class="fa-solid fa-tag"></i> <strong>Topik:</strong> Internet of Things
                </div>
            </div>
            <div style="text-align: right;">
                 <span class="badge badge-warning">Menunggu Keputusan</span>
            </div>
        </div>

        <div style="background: var(--bg-body); padding: 20px; border-radius: var(--radius-sm); margin-bottom: 20px;">
            <p style="margin-bottom: 10px;"><strong>Deskripsi Masalah:</strong></p>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px;">
                Saat ini penggunaan listrik rumah tangga sering tidak terkontrol. Penelitian ini bertujuan membuat prototipe smart home untuk monitoring dan kontrol perangkat listrik via smartphone.
            </p>
            <div style="display: flex; gap: 10px;">
                 <button class="btn btn-outline" style="font-size: 0.8rem; padding: 5px 15px;">
                    <i class="fa-solid fa-file-pdf"></i> Lihat Referensi Jurnal
                 </button>
            </div>
        </div>

        <form>
            <div class="form-group">
                <label class="form-label">Catatan / Masukan (Opsional)</label>
                <textarea class="form-control" rows="2" placeholder="Berikan alasan jika ditolak, atau saran perbaikan..."></textarea>
            </div>
            <div style="display: flex; gap: 15px; justify-content: flex-end;">
                <button type="button" class="btn" style="background: #FFE4E6; color: #E11D48;">
                    <i class="fa-solid fa-times"></i> Tolak Judul
                </button>
                <button type="button" class="btn btn-secondary">
                    <i class="fa-solid fa-check"></i> Terima & Jadi Pembimbing
                </button>
            </div>
        </form>
    </div>

    <!-- Another Request (Compact) -->
    <div class="card" style="opacity: 0.7;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                 <h4 style="margin-bottom: 5px;">Analisis Sentimen Twitter Menggunakan Naive Bayes</h4>
                 <div style="font-size: 0.85rem; color: var(--text-muted);">Mahasiswa: Andi (88219922)</div>
            </div>
            <button class="btn btn-primary" style="padding: 5px 15px; font-size: 0.8rem;">Review Detail</button>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
