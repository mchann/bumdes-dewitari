<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
    <div class="container">
        {{-- Navbar logo & title --}}
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('img/logo-tamansari.png') }}" width="50" height="50" alt="Logo">
            <span class="text-white ms-3">Tamansari Village</span>
        </a>

        {{-- Navbar toggler --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar menus --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto fw-bold">
                {{-- Home --}}
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link text-light {{ request()->routeIs('home') ? 'nav-active' : '' }}">
                        Home
                    </a>
                </li>

                {{-- Destinasi Wisata --}}
                <li class="nav-item">
                    <a href="{{ route('destinations') }}" class="nav-link text-light {{ request()->routeIs('destinations') ? 'nav-active' : '' }}">
                        Destinations
                    </a>
                </li>

                {{-- Paket Wisata --}}
                <li class="nav-item">
                    <a href="{{ route('packages') }}" class="nav-link text-light {{ request()->routeIs('packages') ? 'nav-active' : '' }}">
                        Tour Packages
                    </a>
                </li>

                {{-- Homestay --}}
                <li class="nav-item">
                    <a href="{{ route('homestays') }}" class="nav-link text-light {{ request()->routeIs('homestays') ? 'nav-active' : '' }}">
                        Homestays
                    </a>
                </li>

                @auth
                    {{-- User Dropdown --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @if(Auth::user()->role === 'admin')
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @elseif(Auth::user()->role === 'pemilik')
                                <li><a class="dropdown-item" href="{{ route('pemilik.dashboard') }}">Dashboard</a></li>    
                            @endif
                        
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                        
                        
                    </li>
                @else
                    {{-- Login --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-light {{ request()->routeIs('login') ? 'nav-active' : '' }}">
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

{{-- Dummy div to prevent content from being hidden under navbar --}}
<div style="height: 80px;"></div>
