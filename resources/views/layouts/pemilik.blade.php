<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard Pemilik')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md border-r">
        <div class="p-6 text-2xl font-bold text-blue-600">
            <span class="block">Homestay</span>
            <span class="text-sm text-gray-500">Dashboard Pemilik</span>
        </div>
        <nav class="mt-6">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('pemilik.dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
                        Dashboard
                    </a>
                    <li>
                        <a href="{{ route('pemilik.homestay.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 13V7a2 2 0 00-2-2h-4m-4 0H6a2 2 0 00-2 2v6m16 0v6a2 2 0 01-2 2h-4m-4 0H6a2 2 0 01-2-2v-6"/></svg>
                            Kelola Homestay
                        </a>
                        
                    </li>

                    <li>
                        <a href="{{ route('pemilik.kamar.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 12H3m18-4H3m18 8H3m18 4H3"/>
                            </svg>
                            Kelola Kamar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pemilik.fasilitas.index') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Kelola Fasilitas
                        </a>
                    </li>
                    
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <!-- Header -->
        <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-800">Selamat Datang, {{ Auth::user()->name }}</h1>
            <div class="relative inline-block text-left">
                <!-- Dropdown Trigger -->
                <button type="button" class="inline-flex justify-center items-center text-sm font-medium text-gray-700 focus:outline-none">
                    {{ Auth::user()->name }}
                    <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <path d="M6 8l4 4 4-4" />
                    </svg>
                </button>
                
                <!-- Dropdown Menu -->
                <div class="dropdown-menu absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block">
                    <div class="py-1">
                        <a href="{{ route('pemilik.profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                        
                        <!-- Logout Form -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        

        <!-- Page Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
<style>
    .relative:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu {
        display: none;
    }
</style>