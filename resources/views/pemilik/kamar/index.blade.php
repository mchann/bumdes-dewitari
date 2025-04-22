@extends('layouts.pemilik')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Kamar</h1>
        <a href="{{ route('pemilik.kamar.create') }}" class="btn-primary">
            + Tambah Kamar
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Kamar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Homestay</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kapasitas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Foto</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fasilitas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($kamars as $kamar)
                <tr>
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $kamar->nama_kamar }}</td>
                    <td class="px-6 py-4">{{ $kamar->homestay->nama_homestay }}</td>
                    <td class="px-6 py-4">{{ $kamar->kapasitas }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($kamar->harga, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/'.$kamar->foto_kamar) }}" class="w-20 h-20 object-cover rounded">
                    </td>
                    <td class="px-6 py-4">
                        @forelse($kamar->fasilitas as $fasilitas)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                {{ $fasilitas->nama_fasilitas }}
                            </span>
                        @empty
                            <span class="text-gray-400 italic">Belum ada fasilitas</span>
                        @endforelse
                    </td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="{{ route('pemilik.kamar.edit', $kamar->kamar_id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                        <form action="{{ route('pemilik.kamar.destroy', $kamar->kamar_id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin menghapus kamar?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection