<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md border-r">
        <div class="p-6 text-2xl font-bold text-blue-600">
            <span class="block">Bumdes Dewitari</span>
            <span class="text-sm text-gray-500">Dashboard Admin</span>
        </div>
        <nav class="mt-6">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
                        Dashboard
                    </a>
                </li>

            <li>
                <a href="{{ route('admin.pemilik.list') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-blue-100 rounded-md">
                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Pemilik Homestay
                </a>
            </li>

            
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-800">Selamat Datang, Admin</h1>
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
                        <a href="{{ route('admin.profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                        
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