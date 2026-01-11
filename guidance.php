<?php include 'header.php'; ?>

<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div>
            <h1>Bimbingan & Revisi</h1>
            <p style="color: var(--text-muted);">Diskusi dan revisi bersama dosen pembimbing.</p>
        </div>
        <div style="display: flex; gap: 10px;">
            <span class="badge badge-success" style="font-size: 1rem; padding: 10px 20px;">
                <i class="fa-solid fa-check"></i> Judul Disetujui
            </span>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
        
        <!-- Left Column: Discussion History -->
        <div>
            <div class="card" style="margin-bottom: 20px;">
                <h3 style="margin-bottom: 20px; border-bottom: 1px solid var(--border); padding-bottom: 10px;">
                    Riwayat Bimbingan (BAB 1)
                </h3>
                
                <!-- Chat Item (Dosen) -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 40px; height: 40px; background: var(--secondary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center;">D</div>
                    <div style="flex: 1;">
                        <div style="background: var(--bg-body); padding: 15px; border-radius: 0 15px 15px 15px; border: 1px solid var(--border);">
                            <strong>Dosen Pembimbing</strong> <span style="font-size: 0.8rem; color: var(--text-muted); float: right;">11 Jan 2026, 09:00</span>
                            <p style="margin-top: 5px;">
                                Latar belakang masalah masih kurang kuat datanya. Tolong tambahkan data statistik penggunaan internet di lokasi penelitian. Referensi minimal 5 tahun terakhir ya.
                            </p>
                            <div style="margin-top: 10px; font-size: 0.9rem; color: var(--primary);">
                                <i class="fa-solid fa-file-pdf"></i> Coreta_Revisi_Bab1.pdf
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chat Item (Mahasiswa) -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px; flex-direction: row-reverse;">
                    <div style="width: 40px; height: 40px; background: var(--primary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div style="flex: 1;">
                        <div style="background: var(--primary-light); padding: 15px; border-radius: 15px 0 15px 15px; text-align: right;">
                            <strong>Anda</strong> <span style="font-size: 0.8rem; color: var(--text-muted); float: left;">11 Jan 2026, 14:30</span>
                            <p style="margin-top: 5px;">
                                Baik Pak, saya sudah perbiki latar belakang dengan data dari BPS. Berikut saya lampirkan revisi terbaru.
                            </p>
                            <div style="margin-top: 10px; font-size: 0.9rem; font-weight: 600;">
                                <i class="fa-solid fa-file-word"></i> Revisi_Bab1_V2.docx
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Message Input -->
                <div style="border-top: 1px solid var(--border); paddingTop: 20px; margin-top: 20px;">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Tulis pesan atau balasan revisi..."></textarea>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <button type="button" class="btn btn-outline" style="padding: 8px 15px;">
                                <i class="fa-solid fa-paperclip"></i> Upload File
                            </button>
                            <button type="button" class="btn btn-primary">
                                Kirim Balasan <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- Right Column: Progress & Info -->
        <div>
            <div class="card" style="margin-bottom: 20px;">
                <h4>Kartu Bimbingan</h4>
                <div style="margin-top: 15px;">
                    <div style="margin-bottom: 10px; display: flex; justify-content: space-between;">
                        <span>Progress BAB 1</span>
                        <span class="badge badge-warning">Revisi</span>
                    </div>
                    <div style="height: 6px; background: var(--bg-body); border-radius: 3px; overflow: hidden; margin-bottom: 20px;">
                        <div style="width: 80%; height: 100%; background: var(--primary);"></div>
                    </div>
                    
                    <div style="margin-bottom: 10px; display: flex; justify-content: space-between;">
                        <span>Progress BAB 2</span>
                        <span class="badge badge-secondary">Belum</span>
                    </div>
                    <div style="height: 6px; background: var(--bg-body); border-radius: 3px; overflow: hidden; margin-bottom: 20px;">
                        <div style="width: 0%; height: 100%; background: var(--primary);"></div>
                    </div>

                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 20px;">
                        * Minimal 8x bimbingan untuk mendaftar Sidang Skripsi.
                    </p>
                </div>
            </div>

             <div class="card" style="background: linear-gradient(135deg, var(--secondary), #1A5D3A); color: white;">
                <h4>Jadwal Dosen</h4>
                <div style="margin-top: 15px; font-size: 0.9rem;">
                    <p style="margin-bottom: 5px;"><i class="fa-regular fa-clock"></i> <strong>Senin:</strong> 09:00 - 12:00</p>
                    <p><i class="fa-regular fa-clock"></i> <strong>Kamis:</strong> 13:00 - 15:00</p>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
