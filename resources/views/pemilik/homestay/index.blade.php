@extends('layouts.pemilik')

@section('title', 'Profil Pemilik')

@section('content')
    <h1 class="text-xl font-bold mb-4">Informasi Homestay Anda</h1>

    <a href="{{ route('pemilik.homestay.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        + Tambah Homestay
    </a>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        @forelse ($homestays as $homestay)
            <div class="p-6 bg-white rounded shadow border">
                <h2 class="text-2xl font-semibold mb-2">{{ $homestay->nama_homestay }}</h2>

                <div class="mb-2">
                    <strong>Alamat:</strong>
                    <p>{{ $homestay->alamat_homestay ?? '-' }}</p>
                </div>

                <div class="mb-2">
                    <strong>Link Google Maps:</strong><br>
                    @if ($homestay->link_google_maps)
                        <a href="{{ $homestay->link_google_maps }}" target="_blank" class="text-blue-500 underline">
                            Lihat Lokasi
                        </a>
                    @else
                        <span class="text-gray-500">-</span>
                    @endif
                </div>

                {{-- Tampilkan Peta jika link valid --}}
                @php
                    $lat = null;
                    $lng = null;
                    if ($homestay->link_google_maps && str($homestay->link_google_maps)->contains('@')) {
                        preg_match('/@([-.\d]+),([-.\d]+)/', $homestay->link_google_maps, $matches);
                        $lat = $matches[1] ?? null;
                        $lng = $matches[2] ?? null;
                    }
                @endphp

                @if ($lat && $lng)
                    <div class="mt-3">
                        <strong>Peta Lokasi:</strong>
                        <iframe 
                            width="100%" 
                            height="250" 
                            frameborder="0" 
                            style="border:0" 
                            src="https://www.google.com/maps?q={{ $lat }},{{ $lng }}&hl=es;z=14&output=embed" 
                            allowfullscreen>
                        </iframe>
                    </div>
                @endif

                <div class="mb-2">
                    <strong>Deskripsi:</strong>
                    <p>{{ $homestay->deskripsi ?? '-' }}</p>
                </div>

                <div class="mb-2">
                    <strong>Peraturan:</strong>
                    <p>{{ $homestay->peraturan ?? '-' }}</p>
                </div>

                @if ($homestay->foto_homestay)
                    <div class="mb-4">
                        <strong>Foto Homestay:</strong><br>
                        <img src="{{ asset('storage/' . $homestay->foto_homestay) }}" alt="Foto Homestay" class="w-64 rounded mt-2 border">
                    </div>
                @endif

                {{-- Tombol Hapus --}}
                <form action="{{ route('pemilik.homestay.destroy', $homestay->homestay_id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus homestay ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                        Hapus
                    </button>
                </form>
            </div>
        @empty
            <p class="text-gray-600">Belum ada homestay yang didaftarkan.</p>
        @endforelse
    </div>
@endsection
