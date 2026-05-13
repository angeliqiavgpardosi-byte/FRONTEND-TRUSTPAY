<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TrustPay.id - Add E-Wallet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="flex justify-between items-center px-8 py-6 bg-white shadow">
        <h1 class="text-blue-600 text-2xl font-bold">TrustPay.id</h1>
        <nav class="space-x-6 font-semibold text-gray-700">
            <a href="{{ route('dashboard') }}" class="hover:text-blue-600 transition">Dashboard</a>
            <a href="{{ route('logout') }}" class="hover:text-blue-600 transition">Logout</a>
        </nav>
    </header>

    <main class="flex-1 p-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Add E-Wallet</h2>
        <div class="grid grid-cols-3 gap-6">
            <a href="{{ route('topup','shopee') }}" class="bg-orange-500 text-white rounded-xl p-6 text-center font-semibold hover:opacity-80">ShopeePay</a>
            <a href="{{ route('topup','gopay') }}" class="bg-blue-500 text-white rounded-xl p-6 text-center font-semibold hover:opacity-80">GoPay</a>
            <a href="{{ route('topup','dana') }}" class="bg-indigo-500 text-white rounded-xl p-6 text-center font-semibold hover:opacity-80">Dana</a>
        </div>
    </main>
</body>
</html>
