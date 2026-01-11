<?php include 'header_dosen.php'; ?>

<div class="container">
    <div style="margin-bottom: 30px;">
        <h1>Ruang Bimbingan</h1>
        <p style="color: var(--text-muted);">Pilih mahasiswa untuk melihat riwayat bimbingan.</p>
    </div>

    <div style="display: grid; grid-template-columns: 300px 1fr; gap: 30px;">
        
        <!-- Student List Sidebar -->
        <div class="card" style="padding: 0; overflow: hidden; height: fit-content;">
            <div style="padding: 15px; background: var(--secondary); color: white;">
                <h4 style="color: white; margin: 0;">Mahasiswa Bimbingan</h4>
            </div>
            <div style="display: flex; flex-direction: column;">
                <a href="#" style="padding: 15px; border-bottom: 1px solid var(--border); display: block; background: var(--bg-body); border-left: 4px solid var(--secondary);">
                    <strong>Siti Aminah</strong>
                    <div style="font-size: 0.8rem; color: var(--text-muted);">Bab 2 - Landasan Teori</div>
                </a>
                <a href="#" style="padding: 15px; border-bottom: 1px solid var(--border); display: block;">
                    <strong>Budi Santoso</strong>
                    <div style="font-size: 0.8rem; color: var(--text-muted);">Bab 1 - Pendahuluan</div>
                </a>
                <a href="#" style="padding: 15px; display: block;">
                     <strong>Dewi Lestari</strong>
                    <div style="font-size: 0.8rem; color: var(--text-muted);">Menunggu Seminar Hasil</div>
                </a>
            </div>
        </div>

        <!-- Chat Area -->
        <div class="card">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border); padding-bottom: 15px; margin-bottom: 20px;">
                <div>
                     <h3>Siti Aminah (87654321)</h3>
                     <span class="badge badge-warning">Progress: Bab 2</span>
                </div>
                <button class="btn btn-outline" style="padding: 5px 15px; font-size: 0.8rem;">
                    <i class="fa-solid fa-folder-open"></i> Lihat Draft Full
                </button>
            </div>

            <!-- Chat History -->
            <div style="height: 400px; overflow-y: auto; padding-right: 10px; margin-bottom: 20px;">
                
                <!-- Student Chat -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px;">
                    <div style="width: 40px; height: 40px; background: var(--primary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center;">M</div>
                    <div style="flex: 1;">
                        <div style="background: var(--bg-body); padding: 15px; border-radius: 0 15px 15px 15px; border: 1px solid var(--border);">
                            <strong>Siti Aminah</strong> <span style="font-size: 0.8rem; color: var(--text-muted); float: right;">Kemarin, 14:00</span>
                            <p style="margin-top: 5px;">
                                Selamat siang Pak. Mohon izin mengirimkan revisi Bab 2 terkait teori algoritma yang Bapak minta kemarin. Terima kasih.
                            </p>
                            <div style="margin-top: 10px; font-size: 0.9rem; font-weight: 600; color: var(--primary);">
                                <i class="fa-solid fa-file-word"></i> Revisi_Bab2_Siti.docx
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Dosen Chat (You) -->
                <div style="display: flex; gap: 15px; margin-bottom: 25px; flex-direction: row-reverse;">
                    <div style="width: 40px; height: 40px; background: var(--secondary); border-radius: 50%; color: white; display: flex; align-items: center; justify-content: center;">Ds</div>
                    <div style="flex: 1;">
                        <div style="background: var(--secondary-light); padding: 15px; border-radius: 15px 0 15px 15px; text-align: right;">
                            <strong>Anda</strong> <span style="font-size: 0.8rem; color: var(--text-muted); float: left;">Hari ini, 09:00</span>
                            <p style="margin-top: 5px;">
                                Sudah saya terima. Nanti malam saya cek ya. Fokus ke penulisan daftar pustaka juga, tolong dicek format APA style-nya.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

             <!-- Input -->
             <form style="border-top: 1px solid var(--border); padding-top: 20px;">
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Tulis balasan atau upload coretan revisi..."></textarea>
                </div>
                 <div style="display: flex; justify-content: space-between; align-items: center;">
                    <button type="button" class="btn btn-outline">
                        <i class="fa-solid fa-paperclip"></i> Upload File Coreta
                    </button>
                    <button type="button" class="btn btn-secondary">
                        Kirim Feedback <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>
             </form>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
