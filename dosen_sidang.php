<?php include 'header_dosen.php'; ?>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h1>Jadwal Sidang Skripsi</h1>
            <p style="color: var(--text-muted);">Jadwal Anda sebagai Pembimbing atau Penguji dalam sidang skripsi.</p>
        </div>
        <div style="background: var(--bg-card); border: 1px solid var(--border); padding: 5px; border-radius: var(--radius-sm); display: flex;">
            <button class="btn btn-primary" style="padding: 5px 15px; font-size: 0.9rem;">Bulan Ini</button>
            <button class="btn" style="padding: 5px 15px; font-size: 0.9rem; color: var(--text-muted);">Semua</button>
        </div>
    </div>

    <!-- Stats -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
        <div class="card" style="padding: 20px; display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; background: var(--primary-light); color: var(--primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
            <div>
                <div style="font-size: 1.5rem; font-weight: 700;">5</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">Mahasiswa Diuji</div>
            </div>
        </div>
        <div class="card" style="padding: 20px; display: flex; align-items: center; gap: 15px;">
             <div style="width: 50px; height: 50px; background: var(--secondary-light); color: var(--secondary); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                <i class="fa-solid fa-gavel"></i>
            </div>
            <div>
                <div style="font-size: 1.5rem; font-weight: 700;">2</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">Sebagai Ketua Sidang</div>
            </div>
        </div>
    </div>

    <!-- Schedule List -->
    <div class="card" style="padding: 0; overflow: hidden;">
        <div style="padding: 20px; border-bottom: 1px solid var(--border); background: #f8fafc;">
            <h4 style="margin: 0;">Kamis, 20 Jan 2026</h4>
        </div>
        
        <!-- Item 1 -->
        <div style="padding: 20px; border-bottom: 1px solid var(--border); display: flex; align-items: flex-start; gap: 20px; flex-wrap: wrap;">
            <div style="width: 100px; text-align: center; flex-shrink: 0;">
                <div style="font-size: 1.1rem; font-weight: 700; color: var(--text-main);">09:00</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">R. Sidang Utama</div>
            </div>
            <div style="flex: 1; min-width: 250px;">
                <div style="display: flex; gap: 10px; margin-bottom: 5px;">
                    <h4 style="margin: 0;">Muhamad Ziky (12345678)</h4>
                    <span class="badge badge-warning">Prodi Informatika</span>
                </div>
                <p style="font-size: 0.95rem; color: var(--text-main); margin-bottom: 10px;">
                    "Implementasi Deep Learning untuk Deteksi Hama pada Tanaman Padi Menggunakan Drone"
                </p>
                <div style="display: flex; gap: 20px; font-size: 0.85rem; color: var(--text-muted);">
                    <span><i class="fa-solid fa-user-tie"></i> <strong>Peran:</strong> Ketua Penguji</span>
                    <span><i class="fa-solid fa-file-pdf"></i> Draft Skripsi.pdf</span>
                </div>
            </div>
            <div>
                <button class="btn btn-outline" style="font-size: 0.85rem;">Input Nilai</button>
            </div>
        </div>

        <!-- Item 2 -->
        <div style="padding: 20px; display: flex; align-items: flex-start; gap: 20px; flex-wrap: wrap;">
            <div style="width: 100px; text-align: center; flex-shrink: 0;">
                <div style="font-size: 1.1rem; font-weight: 700; color: var(--text-main);">13:00</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">R. Sidang 2</div>
            </div>
            <div style="flex: 1; min-width: 250px;">
                 <div style="display: flex; gap: 10px; margin-bottom: 5px;">
                    <h4 style="margin: 0;">Anisa Rahma (87651234)</h4>
                    <span class="badge badge-warning">Prodi Informatika</span>
                </div>
                <p style="font-size: 0.95rem; color: var(--text-main); margin-bottom: 10px;">
                    "Analisis UI/UX pada Aplikasi E-Commerce X Menggunakan Metode Design Thinking"
                </p>
                <div style="display: flex; gap: 20px; font-size: 0.85rem; color: var(--text-muted);">
                    <span><i class="fa-solid fa-user"></i> <strong>Peran:</strong> Penguji I</span>
                     <span><i class="fa-solid fa-file-pdf"></i> Draft Skripsi.pdf</span>
                </div>
            </div>
            <div>
                 <button class="btn btn-outline" style="font-size: 0.85rem;">Input Nilai</button>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
