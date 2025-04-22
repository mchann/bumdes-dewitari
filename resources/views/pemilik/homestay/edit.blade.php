@extends('layouts.pemilik')

@section('title', 'Edit Homestay')

@section('content')
    <h1 class="text-xl font-bold mb-4">Edit Informasi Homestay</h1>

    <form action="{{ route('pemilik.homestay.update', $homestay->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama_homestay" class="block font-medium">Nama Homestay</label>
            <input type="text" name="nama_homestay" id="nama_homestay" value="{{ old('nama_homestay', $homestay->nama_homestay) }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label for="alamat_homestay" class="block font-medium">Alamat Homestay</label>
            <textarea name="alamat_homestay" id="alamat_homestay" class="w-full border rounded px-3 py-2">{{ old('alamat_homestay', $homestay->alamat_homestay) }}</textarea>
        </div>

        <div>
            <label for="link_google_maps" class="block font-medium">Link Google Maps</label>
            <input type="text" name="link_google_maps" id="link_google_maps" value="{{ old('link_google_maps', $homestay->link_google_maps) }}" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label for="deskripsi" class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="w-full border rounded px-3 py-2">{{ old('deskripsi', $homestay->deskripsi) }}</textarea>
        </div>

        <div>
            <label for="peraturan" class="block font-medium">Peraturan</label>
            <textarea name="peraturan" id="peraturan" class="w-full border rounded px-3 py-2">{{ old('peraturan', $homestay->peraturan) }}</textarea>
        </div>

        <div>
            <label for="foto_homestay" class="block font-medium">Foto Homestay (opsional)</label>
            <input type="file" name="foto_homestay" id="foto_homestay" class="w-full border rounded px-3 py-2">

            @if ($homestay->foto_homestay)
                <p class="mt-2">Foto saat ini:</p>
                <img src="{{ asset('storage/' . $homestay->foto_homestay) }}" alt="Foto Homestay" class="w-40 mt-2 rounded">
            @endif
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Perubahan</button>
    </form>
@endsection
