@extends('layouts.pemilik')

@section('title', 'Profil Pemilik')

@section('content')
    <h2>Profil Pemilik Homestay</h2>

    @if ($profile)
        <p>Nama Lengkap: {{ $profile->nama_lengkap ?? 'Belum diisi' }}</p>
        <p>Nomor Telepon: {{ $profile->nomor_telepon ?? 'Belum diisi' }}</p>
        <p>Alamat: {{ $profile->alamat ?? 'Belum diisi' }}</p>

        @if (!$profile->nama_lengkap || !$profile->nomor_telepon || !$profile->alamat)
            <div class="alert alert-warning">
                Profil Anda belum lengkap. <a href="{{ route('pemilik.profile.edit') }}" class="btn btn-warning">Lengkapi Profil</a>
            </div>
        @endif
    @else
        <div class="alert alert-warning">
            Profil Anda belum ada. <a href="{{ route('pemilik.profile.create') }}" class="btn btn-warning">Lengkapi Profil</a>
        </div>
    @endif

    <a href="{{ route('pemilik.profile.edit') }}" class="btn btn-primary">Edit Profil</a>
@endsection
