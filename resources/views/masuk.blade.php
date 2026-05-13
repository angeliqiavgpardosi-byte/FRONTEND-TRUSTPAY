<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustPay.id - Masuk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body, html { height: 100%; width: 100%; overflow: hidden; }
        .container { display: flex; width: 100vw; height: 100vh; }

        /* Panel kiri */
        .left-panel {
            width: 50%; background: linear-gradient(135deg, #a5c9fd 0%, #3d6ef5 100%);
            padding: 0 8%; color: white; display: flex; flex-direction: column; justify-content: center;
        }
        .logo-small { font-weight: 700; font-size: 28px; margin-bottom: 40px; }
        .left-panel h1 { font-size: 42px; font-weight: 700; line-height: 1.2; margin-bottom: 15px; }
        .left-panel p { font-size: 16px; font-weight: 300; opacity: 0.8; }

        /* Panel kanan */
        .right-panel {
            width: 50%; padding: 0 10%; display: flex; flex-direction: column; justify-content: center; background-color: white;
        }

        .form-group { margin-bottom: 15px; width: 100%; max-width: 400px; }
        .form-group label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; color: #333; }
        .form-group input { 
            width: 100%; padding: 14px; background-color: #f0f4ff; border: 2px solid transparent; border-radius: 12px;
            outline: none; font-size: 14px; transition: 0.3s;
        }
        .form-group input:focus { border-color: #3d6ef5; background-color: #fff; }

        /* Tombol masuk */
        .btn-masuk {
            background-color: #0022cc; color: white; width: 100%; max-width: 400px; padding: 16px;
            border-radius: 12px; border: none; font-weight: 700; font-size: 16px; cursor: pointer;
            text-decoration: none; display: flex; align-items: center; justify-content: center; 
            transition: 0.3s; margin-top: 20px;
        }
        .btn-masuk:hover { background-color: #001999; transform: scale(1.02); }
    </style>
</head>
<body>
    <div class="container">
        <!-- Panel kiri -->
        <div class="left-panel">
            <a href="{{ route('welcome') }}" style="text-decoration:none; color:white;">
                <div class="logo-small">TrustPay.id 🛡️</div>
            </a>
            <h3>Halo, selamat datang!</h3>
            <h1>Satu aplikasi untuk semua kebutuhan kamu.</h1>
            <p>Kelola semua pembayaran Anda dalam satu akun.</p>
        </div>

        <!-- Panel kanan -->
        <div class="right-panel">
            <form method="POST" action="{{ route('dashboard') }}">
                @csrf
                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                
                <div class="form-group">
                    <label>Email/No.hp</label>
                    <input type="text" name="contact" placeholder="Email atau nomor telepon" required>
                </div>
                
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-masuk">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
