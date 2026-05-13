<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustPay.id - Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Poppins', sans-serif;
        }

        body, html {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .card {
            background: linear-gradient(135deg, #a5c9fd 0%, #3d6ef5 100%);
            width: 100vw;
            height: 100vh;
            padding: 0 10%;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo { 
            font-weight: 700; 
            font-size: 32px; 
            margin-bottom: 60px; 
            display: flex; 
            align-items: center; 
            gap: 12px; 
        }

        .hero h3 { font-size: 20px; font-weight: 300; margin-bottom: 10px; opacity: 0.9; }
        .hero h1 { 
            font-size: 56px; 
            font-weight: 700;
            line-height: 1.2; 
            margin-bottom: 20px; 
            max-width: 800px; 
        }
        .hero p { font-size: 18px; font-weight: 300; opacity: 0.8; margin-bottom: 50px; }

        .btn-group { display: flex; gap: 20px; }
        
        .btn {
            padding: 15px 55px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            font-size: 18px;
            border: none;
            transition: 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-daftar { background-color: #0022cc; color: white; }
        .btn-login { background-color: transparent; color: white; border: 2px solid white; }
        .btn:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">TrustPay.id 🛡️</div>
        <div class="hero">
            <h3>Halo, selamat datang!</h3>
            <h1>Satu aplikasi untuk semua kebutuhan kamu.</h1>
            <p>Kelola semua pembayaran Anda dalam satu akun.</p>
        </div>
        <div class="btn-group">
            <!-- Tombol Daftar -->
            <a href="{{ url('/daftar') }}" class="btn btn-daftar">Daftar</a>
            <!-- Tombol Login diarahkan ke /masuk -->
            <a href="{{ url('/masuk') }}" class="btn btn-login">Login</a>
        </div>
    </div>
</body>
</html>
