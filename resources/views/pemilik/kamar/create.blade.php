@extends('layouts.pemilik')

@section('title', 'Tambah Kamar')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-6">Tambah Kamar Baru</h2>

        <form action="{{ route('pemilik.kamar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Pilih Homestay -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Homestay</label>
                <select name="homestay_id" class="w-full border rounded py-2 px-3" required>
                    <option value="">Pilih Homestay</option>
                    @foreach($homestays as $homestay)
                        <option value="{{ $homestay->homestay_id }}">{{ $homestay->nama_homestay }}</option>
                    @endforeach
                </select>
                @error('homestay_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Nama Kamar -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Kamar</label>
                <input type="text" name="nama_kamar" class="w-full border rounded py-2 px-3" 
                       value="{{ old('nama_kamar') }}" required>
                @error('nama_kamar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Kapasitas -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Kapasitas</label>
                <input type="text" name="kapasitas" class="w-full border rounded py-2 px-3" 
                       value="{{ old('kapasitas') }}" required>
                @error('kapasitas')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Harga per Malam</label>
                <input type="number" name="harga" class="w-full border rounded py-2 px-3" 
                       value="{{ old('harga') }}" step="1000" required>
                @error('harga')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Foto Kamar -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Foto Kamar</label>
                <input type="file" name="foto_kamar" class="w-full" accept="image/*" required>
                @error('foto_kamar')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
   
            <div class="mb-4">
                <label class="block text-black text-sm font-bold mb-2">Fasilitas</label>
                <select name="fasilitas[]" multiple class="w-full border rounded py-2 px-3" id="fasilitas-select">
                    @foreach($fasilitas as $f)
                        <option value="{{ $f->fasilitas_id }}" 
                            {{ in_array($f->fasilitas_id, old('fasilitas', [])) ? 'selected' : '' }}>
                            {{ $f->nama_fas }}
                            
                        </option>
                    @endforeach
                </select>
            </div>
            
            <!-- Tombol Submit -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Tambah Kamar
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelector('input[name="foto_kamar"]').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function() {
            document.querySelector('#preview').src = reader.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    });
</script>
@endsection