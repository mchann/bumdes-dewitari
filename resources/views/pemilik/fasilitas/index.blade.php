@extends('layouts.pemilik')

@section('title', 'Kelola Fasilitas')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Fasilitas</h1>
        <a href="{{ route('pemilik.fasilitas.create') }}" class="btn-primary">
            + Tambah Fasilitas
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Fasilitas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fasilitas as $item)
                <tr>
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $item->nama_fasilitas }}</td>
                    <td class="px-6 py-4 space-x-2">
                        <a href="{{ route('pemilik.fasilitas.edit', $item->fasilitas_id) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('pemilik.fasilitas.destroy', $item->fasilitas_id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600" onclick="return confirm('Hapus fasilitas?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection