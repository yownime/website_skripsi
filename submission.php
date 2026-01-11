<?php include 'header.php'; ?>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h1>Pengajuan Judul Skripsi</h1>
            <p style="color: var(--text-muted);">Ajukan ide penelitianmu untuk disetujui oleh Kaprodi.</p>
        </div>
        <a href="dashboard.php" class="btn btn-outline"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
    </div>

    <div class="card" style="margin-bottom: 40px;">
        <h3 style="margin-bottom: 20px; color: var(--primary);">Formulir Pengajuan Baru</h3>
        <form>
            <div class="form-group">
                <label class="form-label">Topik Penelitan</label>
                <select class="form-control">
                    <option>-- Pilih Topik --</option>
                    <option>Sistem Informasi</option>
                    <option>Kecerdasan Buatan</option>
                    <option>Jaringan Komputer</option>
                    <option>Pengembangan Game</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Usulan Judul (Maks. 3 Judul)</label>
                <div style="margin-bottom: 10px;">
                    <input type="text" class="form-control" placeholder="1. Masukkan prioritas judul utama..." style="margin-bottom: 10px;">
                    <textarea class="form-control" rows="3" placeholder="Deskripsi singkat permasalahan dan tujuan..."></textarea>
                </div>
                <div style="margin-bottom: 10px;">
                     <input type="text" class="form-control" placeholder="2. Masukkan alternatif judul..." style="margin-bottom: 5px;">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Usulan Dosen Pembimbing</label>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <select class="form-control">
                        <option>Pembimbing 1 (Pilih Dosen)</option>
                        <option>Dr. Budi Santoso, M.Kom</option>
                        <option>Siti Aminah, S.T., M.T.</option>
                    </select>
                    <select class="form-control">
                        <option>Pembimbing 2 (Pilih Dosen)</option>
                        <option>Rudi Hermawan, M.Cs</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Dokumen Pendukung (Jurnal Referensi)</label>
                <div style="border: 2px dashed var(--border); padding: 30px; text-align: center; border-radius: var(--radius-sm); color: var(--text-muted); cursor: pointer; transition: 0.2s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border)'">
                    <i class="fa-solid fa-cloud-upload-alt" style="font-size: 2rem; margin-bottom: 10px;"></i><br>
                    Klik atau seret file PDF di sini
                </div>
            </div>

            <div style="text-align: right;">
                <button type="button" class="btn btn-primary">
                    <i class="fa-solid fa-paper-plane"></i> Kirim Pengajuan
                </button>
            </div>
        </form>
    </div>

    <!-- History Timeline -->
    <h3 style="margin-bottom: 20px;">Riwayat Pengajuan</h3>
    <div class="card" style="padding: 0; overflow: hidden;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead style="background: var(--bg-body); border-bottom: 1px solid var(--border);">
                <tr>
                    <th style="padding: 15px 20px; text-align: left;">Tanggal</th>
                    <th style="padding: 15px 20px; text-align: left;">Judul Diajukan</th>
                    <th style="padding: 15px 20px; text-align: left;">Status</th>
                    <th style="padding: 15px 20px; text-align: left;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 15px 20px;">10 Jan 2026</td>
                    <td style="padding: 15px 20px; font-weight: 500;">
                        Sistem Pakar Diagnosa Penyakit Kucing Menggunakan Metode Certainty Factor
                    </td>
                    <td style="padding: 15px 20px;">
                        <span class="badge badge-warning">Menunggu Review</span>
                    </td>
                    <td style="padding: 15px 20px; color: var(--text-muted);">-</td>
                </tr>
                <tr>
                    <td style="padding: 15px 20px;">01 Jan 2026</td>
                    <td style="padding: 15px 20px; color: var(--text-muted);">
                        Aplikasi Kasir Berbasis Web (Too generic)
                    </td>
                    <td style="padding: 15px 20px;">
                        <span class="badge badge-secondary" style="background: #FFE4E6; color: #E11D48;">Ditolak</span>
                    </td>
                    <td style="padding: 15px 20px; color: var(--text-muted);">
                        Judul terlalu umum, tingkatkan kompleksitas.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php'; ?>
