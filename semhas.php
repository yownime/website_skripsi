<?php include 'header.php'; ?>

<div class="container">
    <div style="margin-bottom: 30px;">
        <h1>Seminar Proposal & Hasil</h1>
        <p style="color: var(--text-muted);">Daftar dan pantau jadwal seminar akademikmu.</p>
    </div>

    <!-- Seminar Cards Wrapper -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
        
        <!-- Seminar Proposal (Finished) -->
        <div class="card" style="border-top: 4px solid var(--secondary);">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                <div>
                    <h3 style="color: var(--secondary);">Seminar Proposal</h3>
                    <span class="badge badge-success" style="margin-top: 5px; display: inline-block;">Selesai & Lulus</span>
                </div>
                <div style="font-size: 2rem; color: var(--secondary-light);">
                    <i class="fa-solid fa-check-double"></i>
                </div>
            </div>

            <div style="background: var(--bg-body); padding: 15px; border-radius: var(--radius-sm); margin-bottom: 20px;">
                <p style="font-size: 0.9rem; margin-bottom: 5px;"><strong>Jadwal:</strong> 12 Februari 2026</p>
                <p style="font-size: 0.9rem; margin-bottom: 5px;"><strong>Ruangan:</strong> R. Sidang 1 (Gedung B)</p>
                <p style="font-size: 0.9rem;"><strong>Nilai:</strong> <span style="font-weight: bold; color: var(--secondary);">A (85.5)</span></p>
            </div>

            <button class="btn btn-outline" style="width: 100%; border-color: var(--border); color: var(--text-muted);" disabled>
                <i class="fa-solid fa-print"></i> Cetak Berita Acara
            </button>
        </div>

        <!-- Seminar Hasil (Active) -->
        <div class="card" style="border-top: 4px solid var(--primary);">
             <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                <div>
                    <h3 style="color: var(--primary);">Seminar Hasil</h3>
                    <span class="badge badge-warning" style="margin-top: 5px; display: inline-block;">Pendaftaran Dibuka</span>
                </div>
                <div style="font-size: 2rem; color: var(--primary-light);">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
            </div>

            <!-- Registration Form -->
             <form style="margin-top: 20px;">
                <div class="form-group">
                    <label class="form-label">Upload Draft Skripsi (PDF)</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Upload Lembar Persetujuan Pembimbing</label>
                    <input type="file" class="form-control">
                </div>
                
                <div class="alert" style="background: var(--primary-light); color: var(--primary); font-size: 0.85rem; padding: 10px; border-radius: var(--radius-sm); margin-bottom: 20px;">
                    <i class="fa-solid fa-triangle-exclamation"></i> Pastikan semua berkas lengkap sebelum mendaftar.
                </div>

                <button class="btn btn-primary" style="width: 100%;">
                    Daftar Seminar Hasil
                </button>
             </form>
        </div>

    </div>

    <!-- Upcoming Schedule (General) -->
     <h3 style="margin-top: 50px; margin-bottom: 20px;">Jadwal Seminar Terdekat Jurusan</h3>
     <div class="card" style="padding: 0; overflow: hidden;">
         <table style="width: 100%; text-align: left;">
            <thead style="background: var(--bg-body); color: var(--text-muted);">
                <tr>
                    <th style="padding: 15px 20px;">Nama Mahasiswa</th>
                    <th style="padding: 15px 20px;">Jenis Seminar</th>
                    <th style="padding: 15px 20px;">Waktu</th>
                </tr>
            </thead>
            <tbody>
                 <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 15px 20px;">Ahmad Fauzi</td>
                    <td style="padding: 15px 20px;"><span class="badge badge-secondary">Sempro</span></td>
                    <td style="padding: 15px 20px;">15 Jan, 09:00 WIB</td>
                 </tr>
                 <tr>
                    <td style="padding: 15px 20px;">Sarah Wijaya</td>
                    <td style="padding: 15px 20px;"><span class="badge badge-warning">Semhas</span></td>
                    <td style="padding: 15px 20px;">15 Jan, 13:00 WIB</td>
                 </tr>
            </tbody>
         </table>
     </div>
</div>

<?php include 'footer.php'; ?>
