@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Top Up {{ ucfirst($wallet) }}</h1>

    <form method="GET" action="{{ route('dashboard') }}" class="space-y-4">
        <div>
            <label class="block font-semibold mb-2">No. Telepon</label>
            <input type="text" name="phone" class="w-full border rounded-lg p-3" placeholder="081234567890">
        </div>
        <div>
            <label class="block font-semibold mb-2">Nominal</label>
            <input type="number" name="amount" class="w-full border rounded-lg p-3" placeholder="100000">
            @if($wallet === 'shopee')
                <small>Minimal top up Rp 20.000</small>
            @elseif($wallet === 'dana')
                <small>Minimal top up Rp 10.000</small>
            @elseif($wallet === 'gopay')
                <small>Minimal top up Rp 15.000</small>
            @endif
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold">Konfirmasi Pembayaran</button>
    </form>
</div>
@endsection
