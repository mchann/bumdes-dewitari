@extends('layouts.admin')

@section('title', 'Daftar Pemilik Homestay')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Header dengan Tombol -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Pemilik Homestay</h1>
        <a href="{{ route('admin.pendaftaran.pemilik') }}" 
           class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Tambah Pemilik
        </a>
    </div>

    <!-- Tabel -->
    <div class="bg-white rounded-lg shadow overflow-hidden border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Pemilik</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Homestay</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Daftar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($pemilikList as $index => $pemilik)
              
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                        {{ $pemilik->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $pemilik->email }}</td>
                    <td class="px-6 py-4">
                        @forelse($pemilik->pemilikProfile->homestays ?? [] as $homestay)
                            <span class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full mr-2 mb-2">
                                {{ $homestay->nama_homestay }}
                            </span>
                        @empty
                            <span class="text-gray-400 italic">Belum ada homestay</span>
                        @endforelse
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                        {{ $pemilik->created_at->translatedFormat('d F Y') }}
                    </td>

                    <td>{{ $pemilik->status }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($pemilik->status == 'aktif')
                            <form action="{{ route('admin.admin.nonaktifkan', $pemilik->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="text-red-500 hover:text-red-700">Nonaktifkan</button>
                            </form>
                        @else
                            <form action="{{ route('admin.admin.aktifkan', $pemilik->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="text-green-500 hover:text-green-700">Aktifkan</button>
                            </form>
                        @endif
                    </td>
                    
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection