@extends('layouts.pemilik')

@section('title', 'Tambah Homestay')

@section('content')
    <h1 class="text-xl font-bold mb-4">Tambah Homestay Baru</h1>

    <form action="{{ route('pemilik.homestay.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold">Nama Homestay</label>
            <input type="text" name="nama_homestay" required class="w-full border rounded px-3 py-2" />
        </div>

        <div>
            <label class="block font-semibold">Alamat</label>
            <textarea name="alamat_homestay" required class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div>
            <label class="block font-semibold">Link Google Maps</label>
            <input type="url" name="link_google_maps" required class="w-full border rounded px-3 py-2" />
        </div>

        <div>
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div>
            <label class="block font-semibold">Peraturan</label>
            <textarea name="peraturan" class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <div>
            <label class="block font-semibold">Foto Homestay</label>
            <input type="file" name="foto_homestay" accept="image/*" class="w-full border rounded px-3 py-2" />
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan Homestay
        </button>
    </form>
@endsection
