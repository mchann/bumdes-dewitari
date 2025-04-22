<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Pemilik\PemilikProfileController;
use App\Http\Controllers\Pemilik\HomestayController;
use App\Http\Controllers\Pemilik\KamarController;
use App\Http\Controllers\Pemilik\FasilitasController;

//      HALAMAN UMUM
Route::get('/', [PostController::class, 'show_home'])->name('home');
Route::get('/destinations', [PostController::class, 'show_destinations'])->name('destinations');
Route::get('/packages', [PostController::class, 'show_packages'])->name('packages');
Route::get('/homestays', [PostController::class, 'show_homestays'])->name('homestays');

//      LOGIN & REGISTER
Route::get('/login', fn () => Auth::check() ? redirect()->route('home') : view('auth.login'))->name('login');
Route::get('/register', fn () => Auth::check() ? redirect()->route('home') : view('auth.register'))->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

//      SOSIAL LOGIN
Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

Route::get('/auth/facebook', [FacebookController::class, 'redirect'])->name('facebook.redirect');
Route::get('/auth/facebook/callback', [FacebookController::class, 'callback'])->name('facebook.callback');

//      LOGOUT
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


//      REDIRECT DASHBOARD (Role-Based)
Route::match(['get', 'post'], '/dashboard', function () {
    $user = auth()->user();
    return match ($user->role) {
        'admin' => redirect()->route('home'),
        'pemilik' => redirect()->route('home'),
        default => redirect()->route('home'),
    };
})->middleware(['auth', 'verified'])->name('dashboard');

//      PELANGGAN (User Biasa)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/booking', [PostController::class, 'show_booking'])->name('booking');
    
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
    });
});

//      ADMIN BUMDES
Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
    // Di dalam group admin
Route::get('/pemilik-homestay', [RegisteredUserController::class, 'daftarPemilik'])->name('pemilik.list');

    // Pendaftaran Pemilik Homestay
    Route::get('/daftarpemilik', fn () => view('admin.daftarpemilik'))->name('pendaftaran.pemilik');
    Route::post('/daftarpemilik', [RegisteredUserController::class, 'storePemilik'])->name('store.pemilik');

    // Profile Admin
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'show'])->name('show');
        Route::put('/', [ProfileController::class, 'update'])->name('update');
        Route::get('/create', [ProfileController::class, 'create'])->name('create');
        Route::post('/store', [ProfileController::class, 'store'])->name('store');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit'); 
    });
    Route::put('/pemilik/{id}/nonaktifkan', [ProfileController::class, 'nonaktifkan'])->name('admin.nonaktifkan');
    Route::put('/pemilik/{id}/aktifkan', [ProfileController::class, 'aktifkan'])->name('admin.aktifkan');

});

// PEMILIK HOMESTAY
Route::middleware(['auth', 'verified', 'role:pemilik'])->prefix('pemilik')->name('pemilik.')->group(function () {
    Route::get('/dashboard', fn () => view('pemilik.dashboard'))->name('dashboard');

    // Profile Pemilik
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [PemilikProfileController::class, 'show'])->name('show');
        Route::get('/edit', [PemilikProfileController::class, 'edit'])->name('edit');
        Route::put('/update', [PemilikProfileController::class, 'update'])->name('update');
        Route::get('/create', [PemilikProfileController::class, 'create'])->name('create');
        Route::post('/store', [PemilikProfileController::class, 'store'])->name('store');

        
    });
    

    Route::resource('homestay', HomestayController::class);
      // Kamar - Tambahan baru
      Route::resource('kamar', \App\Http\Controllers\Pemilik\KamarController::class)
      ->names([
          'index' => 'kamar.index',
          'create' => 'kamar.create',
          'store' => 'kamar.store',
          'edit' => 'kamar.edit',
          'update' => 'kamar.update',
          'destroy' => 'kamar.destroy'
      ]);
      Route::resource('fasilitas', FasilitasController::class);
      Route::resource('fasilitas', \App\Http\Controllers\Pemilik\FasilitasController::class)
     ->names([
         'index' => 'fasilitas.index',
         'create' => 'fasilitas.create',
         'store' => 'fasilitas.store',
         'edit' => 'fasilitas.edit',
         'update' => 'fasilitas.update',
         'destroy' => 'fasilitas.destroy'
     ]);
});

require __DIR__ . '/auth.php';
