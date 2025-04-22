@extends('layouts.pemilik')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="text-lg font-semibold">Total kamar
            <p class="text-2xl font-bold text-blue-500">3</p>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="text-lg font-semibold">Total Booking</h2>
            <p class="text-2xl font-bold text-green-500">12</p>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
            <h2 class="text-lg font-semibold">Pendapatan Bulan Ini</h2>
            <p class="text-2xl font-bold text-yellow-500">Rp 4.500.000</p>
        </div>
    </div>
@endsection
