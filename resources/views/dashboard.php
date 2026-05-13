<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TrustPay.id - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
        }
        .action-card {
            background: rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .action-card:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">

    <div class="bg-white w-full max-w-4xl rounded-3xl overflow-hidden shadow-2xl relative">
        
        <header class="flex justify-between items-center px-8 py-6">
            <div>
                <h1 class="text-blue-600 text-2xl font-bold flex items-center">
                    TrustPay.id <i class="fas fa-check-circle ml-2 text-blue-500 text-sm"></i>
                </h1>
                <p class="text-gray-500 text-sm">Hi,Angelique</p>
            </div>
            <nav class="space-x-6 font-semibold text-gray-700">
                <a href="{{ route('welcome') }}" class="hover:text-blue-600 transition">Home</a>
                <a href="{{ route('notifikasi') }}" class="hover:text-blue-600 transition">Notifikasi</a>
                <a href="{{ route('logout') }}" class="hover:text-blue-600 transition">Logout</a>
                <a href="{{ route('pusatbantuan') }}" class="bg-blue-800 text-white px-4 py-1 rounded-full text-xs hover:bg-blue-700 transition">
                    <i class="fas fa-question-circle mr-2"></i> Pusat Bantuan
                </a>
            </nav>
        </header>

        <main class="mx-6 mb-6 p-10 rounded-2xl relative overflow-hidden min-h-[400px] flex flex-col justify-between" 
              style="background: linear-gradient(135deg, #2b4c7e 0%, #567ebb 100%);">
            
            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-white opacity-10 rounded-full"></div>

            <div class="glass-card w-full h-32 mb-8"></div>

            <div class="grid grid-cols-3 gap-6 relative z-10">
                <!-- ADD diarahkan ke route addwallet -->
                <div onclick="window.location.href='{{ route('addwallet') }}'" 
                     class="action-card rounded-2xl p-8 flex flex-col items-center justify-center border border-white/30">
                    <div class="w-16 h-16 border-2 border-white rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-plus text-white text-2xl"></i>
                    </div>
                    <span class="text-white font-bold tracking-widest">ADD</span>
                </div>

                <div class="action-card rounded-2xl p-8 flex flex-col items-center justify-center border border-white/30">
                    <i class="fas fa-paper-plane text-white text-5xl mb-4"></i>
                    <span class="text-white font-bold tracking-widest">SEND</span>
                </div>

                <div class="action-card rounded-2xl p-8 flex flex-col items-center justify-center border border-white/30">
                    <i class="fas fa-sync-alt text-white text-5xl mb-4"></i>
                    <span class="text-white font-bold tracking-widest">EXCHANGE</span>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
