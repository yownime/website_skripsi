<?php include 'header_dosen.php'; ?>

<div class="container">
    <div style="margin-bottom: 30px;">
        <h1>Dashboard Dosen</h1>
        <p style="color: var(--text-muted);">Selamat datang, Bapak/Ibu. Berikut ringkasan aktivitas bimbingan mahasiswa.</p>
    </div>

    <!-- Quick Stats -->
    <div class="grid-dashboard" style="margin-bottom: 40px;">
        <div class="card" style="border-left: 5px solid var(--secondary);">
            <div style="font-size: 0.9rem; color: var(--text-muted);">Total Mahasiswa Bimbingan</div>
            <div style="font-size: 2rem; font-weight: 700; color: var(--text-main);">12 <span style="font-size: 1rem; font-weight: 400;">Mhs</span></div>
        </div>
        <div class="card" style="border-left: 5px solid var(--primary);">
            <div style="font-size: 0.9rem; color: var(--text-muted);">Menunggu Validasi Judul</div>
            <div style="font-size: 2rem; font-weight: 700; color: var(--primary);">3 <span style="font-size: 1rem; font-weight: 400;">Baru</span></div>
        </div>
        <div class="card" style="border-left: 5px solid #E11D48;">
            <div style="font-size: 0.9rem; color: var(--text-muted);">Revisi Belum Direspon</div>
            <div style="font-size: 2rem; font-weight: 700; color: #E11D48;">5 <span style="font-size: 1rem; font-weight: 400;">Pesan</span></div>
        </div>
    </div>

    <!-- Priority Tasks -->
    <h3 style="margin-bottom: 20px;">Prioritas Hari Ini</h3>
    <div class="card" style="padding: 0; overflow: hidden; margin-bottom: 40px;">
        <table style="width: 100%; border-collapse: collapse;">
             <thead style="background: var(--bg-body); border-bottom: 1px solid var(--border);">
                <tr>
                    <th style="padding: 15px 20px; text-align: left;">Mahasiswa</th>
                    <th style="padding: 15px 20px; text-align: left;">Jenis Aktivitas</th>
                    <th style="padding: 15px 20px; text-align: left;">Waktu</th>
                    <th style="padding: 15px 20px; text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 15px 20px;">
                        <strong>Budi Santoso</strong><br>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">NIM: 12345678</span>
                    </td>
                    <td style="padding: 15px 20px;">
                        <span class="badge badge-warning">Pengajuan Judul</span>
                    </td>
                    <td style="padding: 15px 20px;">2 Jam yang lalu</td>
                    <td style="padding: 15px 20px; text-align: right;">
                        <a href="dosen_judul.php" class="btn btn-primary" style="padding: 5px 15px; font-size: 0.8rem;">Review</a>
                    </td>
                </tr>
                 <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 15px 20px;">
                        <strong>Siti Aminah</strong><br>
                         <span style="font-size: 0.8rem; color: var(--text-muted);">NIM: 87654321</span>
                    </td>
                    <td style="padding: 15px 20px;">
                        <span class="badge badge-success">Revisi Bab 2</span>
                    </td>
                    <td style="padding: 15px 20px;">Kemarin</td>
                    <td style="padding: 15px 20px; text-align: right;">
                        <a href="dosen_bimbingan.php" class="btn btn-secondary" style="padding: 5px 15px; font-size: 0.8rem;">Balas</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
