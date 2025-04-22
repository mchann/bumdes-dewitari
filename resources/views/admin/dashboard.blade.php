@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <p class="text-gray-600">Selamat datang di Dashboard Admin!</p>

    <a href="{{ route('admin.pendaftaran.pemilik') }}"
       class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Daftarkan Pemilik Homestay
    </a>
@endsection
