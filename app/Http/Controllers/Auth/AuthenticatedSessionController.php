<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function create(): View|RedirectResponse
    {
        // Cegah akses login jika user sudah masuk, langsung arahkan ke home
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    /**
     * Menangani proses autentikasi user.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
    
        $user = Auth::user();
    
        // Redirect sesuai role
        return match ($user->role) {
            'admin' => redirect()->route('admin.dashboard')->with('status', 'Welcome Admin!'),
            'pemilik' => redirect()->route('pemilik.dashboard')->with('status', 'Welcome Pemilik!'),
            default => redirect()->route('home')->with('status', 'Login successful!'),
        };
    }
    

    /**
     * Logout user dan hapus sesi autentikasi.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Pastikan user diarahkan ke home setelah logout
        return redirect()->route('home')->with('status', 'You have been logged out successfully.');
    }
}
