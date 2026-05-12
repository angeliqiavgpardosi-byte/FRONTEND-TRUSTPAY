<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrustPay.id - Satu Aplikasi untuk Semua</title>
    <style>
        /* Menggunakan font modern */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f2f5;
        }

        /* Container Utama */
        .card {
            position: relative;
            width: 900px;
            height: 550px;
            background: linear-gradient(135deg, #053f7a, #9cd3fd);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

                /* Konten */
        .content {
            position: relative;
            z-index: 10;
            max-width: 600px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 28px;
            font-weight: 700;
            color: #0015b5;
            margin-bottom: 80px;
        }

        .logo span {
            color: #000;
        }

        .logo-icon {
            background-color: #6274FF;
            width: 30px;
            height: 30px;
            border-radius: 8px;
            margin-left: 10px;
            display: inline-block;
            position: relative;
        }

        /* Simbol Centang Putih */
        .logo-icon::after {
            content: '';
            position: absolute;
            left: 10px;
            top: 5px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
        }

        .welcome-text {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 15px;
            opacity: 0.9;
        }

        h1 {
            font-size: 40px;
            line-height: 1.3;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .sub-text {
            font-size: 16px;
            margin-bottom: 40px;
            opacity: 0.8;
        }

        /* Tombol */
        .cta-container {
            display: flex;
            gap: 20px;
        }

        .btn {
            padding: 14px 45px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-daftar {
            background-color: #041BC9;
            color: white;
            border: none;
        }

        .btn-daftar:hover {
            background-color: #0012a3;
            transform: translateY(-2px);
        }

        .btn-login {
    background-color: transparent;
    color: #041BC9;
    border: 2px solid rgb(4, 27, 201);
    transition: 0.3s; /* Tambahkan ini agar halus */
}

    .btn-login:hover {
    background-color: #041BC9;
    color: white;
    transform: translateY(-8px); /* Angka -8px bikin dia naik lebih tinggi */
}

    </style>
</head>
<body>

    <div class="card">
        <div class="content">
            <div class="logo">
                TrustPay.id</span>
                <div class="logo-icon"></div>
            </div>

            <p class="welcome-text">Halo, selamat datang!</p>
            <h1>Satu aplikasi untuk semua kebutuhan kamu.</h1>
            <p class="sub-text">Kelola semua pembayaran Anda dalam satu akun.</p>

            <div class="cta-container">
                <a href="#" class="btn btn-daftar">Daftar</a>
                <a href="#" class="btn btn-login">Login</a>
            </div>
        </div>
    </div>

</body>
</html>