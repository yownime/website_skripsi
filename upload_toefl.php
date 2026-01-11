<?php include 'header.php'; ?>

<div class="container" style="max-width: 600px; padding-top: 40px;">
    <div class="card">
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="width: 60px; height: 60px; background: var(--primary-light); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.5rem;">
                <i class="fa-solid fa-language"></i>
            </div>
            <h2>Upload Sertifikat TOEFL</h2>
            <p style="color: var(--text-muted);">Nilai minimal skor: 450. Pastikan dokumen terbaca jelas.</p>
        </div>

        <form action="sidang.php">
            <!-- Simulate success state on redirect -->
            <input type="hidden" name="state" value="scheduled">

            <div class="form-group">
                <label class="form-label">Institusi Penyelenggara</label>
                <select class="form-control">
                    <option>Pusat Bahasa Universitas</option>
                    <option>Lembaga Bahasa LIA</option>
                    <option>EF (English First)</option>
                    <option>Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Skor TOEFL</label>
                <input type="number" class="form-control" placeholder="Contoh: 500" min="450" required>
            </div>

            <div class="form-group">
                <label class="form-label">Upload Scan Sertifikat (PDF/JPG)</label>
                <div style="border: 2px dashed var(--border); padding: 40px; text-align: center; border-radius: var(--radius-sm); cursor: pointer; transition: 0.2s; background: #fafafa;" onmouseover="this.style.borderColor='var(--primary)'; this.style.background='#fff'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='#fafafa'">
                    <i class="fa-solid fa-cloud-arrow-up" style="font-size: 2rem; color: var(--text-muted); margin-bottom: 10px;"></i><br>
                    <span style="color: var(--primary); font-weight: 600;">Pilih File</span> atau drag & drop disini
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">
                <i class="fa-solid fa-check-circle"></i> Simpan & Verifikasi
            </button>
            <a href="sidang.php" class="btn btn-outline" style="width: 100%; margin-top: 10px; border: none; color: var(--text-muted);">
                Batal
            </a>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
