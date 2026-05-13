<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustPay.id - Buat PIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body, html { height: 100%; width: 100%; overflow: hidden; }
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

        .form-group { margin-bottom: 20px; width: 100%; max-width: 400px; position: relative; }
        .form-group label { display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #333; }
        
        .input-wrapper { position: relative; width: 100%; }
        
        .form-group input {
            width: 100%; padding: 14px; padding-right: 50px; background-color: #f0f4ff; border: 2px solid transparent; border-radius: 12px;
            outline: none; font-size: 24px; text-align: center; letter-spacing: 12px; font-weight: 600; transition: 0.3s;
            
            /* Trik agar tampilan password menggunakan karakter bulat (disc) atau kotak (square) */
            -webkit-text-security: disc; /* Pilihan: disc, circle, square */
        }
        
        /* Jika ikon mata diklik (tipe jadi text), kita hilangkan security-nya agar angka kelihatan */
        .form-group input[type="text"] {
            -webkit-text-security: none;
        }

        .toggle-pin { position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #3d6ef5; font-size: 18px; }
        
        .error-message { color: #ff4d4d; font-size: 11px; margin-top: 5px; display: none; font-weight: 500; }

        .btn-daftar {
            background-color: #0022cc; color: white; width: 100%; max-width: 400px; padding: 16px;
            border-radius: 12px; border: none; font-weight: 700; font-size: 16px; cursor: pointer; transition: 0.3s; margin-top: 10px;
        }
        .btn-daftar:hover { background-color: #001999; transform: scale(1.02); }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <a href="{{ route('home') }}" style="text-decoration:none; color:white;"><div class="logo-small">TrustPay.id 🛡️</div></a>
            <h3>Halo, selamat datang!</h3>
            <h1>Satu aplikasi untuk semua kebutuhan kamu.</h1>
            <p>Kelola semua pembayaran Anda dalam satu akun.</p>
        </div>
        
        <div class="right-panel">
            <div class="form-group">
                <label>Buat PIN Baru</label>
                <div class="input-wrapper">
                    <input type="password" id="p1" placeholder="••••••" inputmode="numeric" oninput="validateInput(this)">
                    <i class="fa-regular fa-eye toggle-pin" onclick="toggle('p1', this)"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label>Konfirmasi PIN</label>
                <div class="input-wrapper">
                    <input type="password" id="p2" placeholder="••••••" inputmode="numeric" oninput="validateInput(this); checkMatch();">
                    <i class="fa-regular fa-eye toggle-pin" onclick="toggle('p2', this)"></i>
                </div>
                <p id="error-text" class="error-message">PIN tidak sama, periksa kembali.</p>
            </div>
            
            <button class="btn-daftar" id="btnSubmit">Daftar</button>
        </div>
    </div>

    <script>
        function validateInput(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (input.value.length > 6) input.value = input.value.slice(0, 6);
        }

        function checkMatch() {
            const pin1 = document.getElementById('p1').value;
            const pin2 = document.getElementById('p2').value;
            const errorText = document.getElementById('error-text');
            const btn = document.getElementById('btnSubmit');

            if (pin2.length >= 1 && pin1 !== pin2) {
                errorText.style.display = 'block';
                btn.style.opacity = '0.5';
                btn.disabled = true;
            } else {
                errorText.style.display = 'none';
                btn.style.opacity = '1';
                btn.disabled = false;
            }
        }

        function toggle(id, icon) {
            const input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>
</body>
</html>