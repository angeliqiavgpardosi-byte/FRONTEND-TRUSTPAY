<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustPay.id - Daftar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* --- RESET & BASE --- */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body, html { height: 100%; width: 100%; overflow: hidden; }

        /* --- LAYOUT --- */
        .container { display: flex; width: 100vw; height: 100vh; }

        .left-panel {
            width: 50%; background: linear-gradient(135deg, #a5c9fd 0%, #3d6ef5 100%);
            padding: 0 8%; color: white; display: flex; flex-direction: column; justify-content: center;
        }
        .logo-small { font-weight: 700; font-size: 28px; margin-bottom: 40px; }
        .left-panel h3 { font-size: 18px; font-weight: 300; margin-bottom: 10px; opacity: 0.9; }
        .left-panel h1 { font-size: 42px; font-weight: 700; line-height: 1.2; margin-bottom: 15px; }
        .left-panel p { font-size: 16px; font-weight: 300; opacity: 0.8; }

        .right-panel {
            width: 50%; padding: 0 10%; display: flex; flex-direction: column; justify-content: center; background-color: white;
        }

        /* --- FORM ELEMENTS --- */
        .form-group { margin-bottom: 15px; width: 100%; max-width: 400px; position: relative; }
        .form-group label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; color: #333; }
        
        .input-wrapper { position: relative; width: 100%; }
        .form-group input { 
            width: 100%; padding: 14px; padding-right: 45px; background-color: #f0f4ff; border: 2px solid transparent; border-radius: 12px; outline: none; font-size: 14px; transition: 0.3s;
        }
        .form-group input:focus { border-color: #3d6ef5; background-color: #fff; }

        .toggle-pass { position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #3d6ef5; }

        /* --- SYARAT PASSWORD (GRID & KECIL) --- */
        .requirements { 
            margin-top: 10px; 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 5px 10px; 
            padding-left: 5px;
        }
        .requirements li { 
            font-size: 10px; 
            color: #ff4d4d; 
            display: flex; 
            align-items: center; 
            gap: 6px; 
            transition: 0.3s; 
        }
        .requirements li#char { grid-column: span 2; } /* Biar syarat 8 karakter memanjang sendiri */

        .requirements li.valid { color: #2ecc71; }
        .requirements li i { font-size: 11px; }

        /* --- TOMBOL --- */
        .btn-selanjutnya {
            background-color: #0022cc; color: white; width: 100%; max-width: 400px; padding: 16px;
            border-radius: 12px; border: none; font-weight: 700; font-size: 16px; cursor: pointer;
            text-decoration: none; display: flex; align-items: center; justify-content: center; 
            transition: 0.3s; margin-top: 20px; 
            
            /* Kondisi mati di awal */
            opacity: 0.5; 
            pointer-events: none; 
        }
        .btn-selanjutnya.active { 
            opacity: 1; 
            pointer-events: auto; 
            box-shadow: 0 4px 15px rgba(0, 34, 204, 0.2);
        }
        .btn-selanjutnya:hover { background-color: #001999; transform: scale(1.02); }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <a href="{{ route('home') }}" style="text-decoration:none; color:white;">
                <div class="logo-small">TrustPay.id 🛡️</div>
            </a>
            <h3>Halo, selamat datang!</h3>
            <h1>Satu aplikasi untuk semua kebutuhan kamu.</h1>
            <p>Kelola semua pembayaran Anda dalam satu akun.</p>
        </div>

        <div class="right-panel">
            <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" id="username" placeholder="Username" oninput="validateAll()">
            </div>
            
            <div class="form-group">
                <label>Email/No.hp</label>
                <input type="text" id="contact" placeholder="Email atau nomor telepon" oninput="validateAll()">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <div class="input-wrapper">
                    <input type="password" id="passInput" oninput="validateAll()" placeholder="••••••••">
                    <i class="fa-regular fa-eye toggle-pass" onclick="togglePass(this)"></i>
                </div>
                
                <ul class="requirements">
                    <li id="char"><i class="fa-solid fa-circle-xmark"></i> Minimal 8 karakter</li>
                    <li id="upper"><i class="fa-solid fa-circle-xmark"></i> Huruf Kapital</li>
                    <li id="lower"><i class="fa-solid fa-circle-xmark"></i> Huruf Kecil</li>
                    <li id="num"><i class="fa-solid fa-circle-xmark"></i> Angka (0-9)</li>
                    <li id="spec"><i class="fa-solid fa-circle-xmark"></i> Simbol (@#$)</li>
                </ul>
            </div>

            <a href="{{ route('halaman.pin') }}" id="btnNext" class="btn-selanjutnya">Selanjutnya</a>
        </div>
    </div>

    <script>
        // Fungsi Lihat/Sembunyi Password
        function togglePass(icon) {
            const p = document.getElementById('passInput');
            if (p.type === "password") {
                p.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                p.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }

        // Fungsi Validasi Semua Input
        function validateAll() {
            const user = document.getElementById('username').value.trim();
            const contact = document.getElementById('contact').value.trim();
            const pass = document.getElementById('passInput').value;
            const btn = document.getElementById('btnNext');

            // Cek syarat password satu-satu
            const checks = {
                char: pass.length >= 8,
                upper: /[A-Z]/.test(pass),
                lower: /[a-z]/.test(pass),
                num: /[0-9]/.test(pass),
                spec: /[@#$!%*?&]/.test(pass)
            };

            let passIsValid = true;
            for (const key in checks) {
                const el = document.getElementById(key);
                const icon = el.querySelector('i');
                if (checks[key]) {
                    el.classList.add('valid');
                    icon.classList.replace('fa-circle-xmark', 'fa-circle-check');
                } else {
                    el.classList.remove('valid');
                    icon.classList.replace('fa-circle-check', 'fa-circle-xmark');
                    passIsValid = false;
                }
            }

            // Aktifkan tombol jika Username + Contact terisi DAN Password valid
            if (user !== "" && contact !== "" && passIsValid) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        }
    </script>
</body>
</html>