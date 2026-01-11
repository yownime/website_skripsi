<?php include 'header.php'; ?>

<div class="container" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px;">
    <div class="card" style="display: flex; flex-direction: row; max-width: 900px; padding: 0; overflow: hidden; width: 100%;">
        
        <!-- Left Side: Hero content -->
        <div style="flex: 1; background: linear-gradient(135deg, var(--primary), #FF6B00); padding: 40px; display: flex; flex-direction: column; justify-content: center; color: white; display: none; @media (min-width: 768px) { display: flex; }">
            <h1 style="font-size: 2.5rem; margin-bottom: 20px; color: white;">Selamat Datang Pejuang Skripsi!</h1>
            <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: 30px;">
                Sistem Terpadu Manajemen Skripsi. Mulai perjalanan akademikmu dari pengajuan judul hingga wisuda di satu tempat.
            </p>
            <div style="display: flex; gap: 15px;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-check-circle" style="color: var(--secondary);"></i> <span>Mudah</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-check-circle" style="color: var(--secondary);"></i> <span>Transparan</span>
                </div>
            </div>
        </div>

        <!-- Right Side: Form -->
        <div style="flex: 1; padding: 50px;">
            <div style="text-align: center; margin-bottom: 30px;">
                <h2 style="color: var(--primary);">Masuk ke Portal</h2>
                <p style="color: var(--text-muted);">Pilih peran untuk melanjutkan</p>
                
                <div style="display: flex; gap: 10px; justify-content: center; margin-top: 20px; background: #f1f5f9; padding: 5px; border-radius: 50px; width: fit-content; margin-left: auto; margin-right: auto;">
                    <button id="btn-mhs" onclick="switchRole('mhs')" class="btn" style="background: white; color: var(--primary); padding: 5px 20px; box-shadow: var(--shadow-sm); border-radius: 50px;">Mahasiswa</button>
                    <button id="btn-dosen" onclick="switchRole('dosen')" class="btn" style="background: transparent; color: var(--text-muted); padding: 5px 20px; border-radius: 50px;">Dosen</button>
                </div>
            </div>

            <form id="loginForm" action="dashboard.php">
                <div class="form-group">
                    <label id="label-id" class="form-label">NIM</label>
                    <input type="text" class="form-control" placeholder="Masukan NIM..." required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    Masuk Portal
                </button>
            </form>

            <div style="margin-top: 20px; text-align: center; font-size: 0.9rem; color: var(--text-muted);">
                Lupa kata sandi? <a href="#" style="color: var(--primary); font-weight: 600;">Hubungi Admin</a>
            </div>
        </div>

    </div>
</div>

<script>
    function switchRole(role) {
        const btnMhs = document.getElementById('btn-mhs');
        const btnDosen = document.getElementById('btn-dosen');
        const form = document.getElementById('loginForm');
        const labelId = document.getElementById('label-id');

        if(role === 'mhs') {
            btnMhs.style.background = 'white';
            btnMhs.style.color = 'var(--primary)';
            btnMhs.style.boxShadow = 'var(--shadow-sm)';
            
            btnDosen.style.background = 'transparent';
            btnDosen.style.color = 'var(--text-muted)';
            btnDosen.style.boxShadow = 'none';

            form.action = 'dashboard.php';
            labelId.innerText = 'NIM';
        } else {
            btnDosen.style.background = 'white';
            btnDosen.style.color = 'var(--primary)';
            btnDosen.style.boxShadow = 'var(--shadow-sm)';
            
            btnMhs.style.background = 'transparent';
            btnMhs.style.color = 'var(--text-muted)';
            btnMhs.style.boxShadow = 'none';

            form.action = 'dashboard_dosen.php';
            labelId.innerText = 'NIDN / NIP';
        }
    }
</script>

<style>
    /* Responsive tweaks for inline styles */
    @media (min-width: 768px) {
        .card > div:first-child { display: flex !important; }
    }
</style>

<?php include 'footer.php'; ?>
