<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Jika menggunakan Laravel Socialite, pastikan tersedia
        if (class_exists(Socialite::class)) {
            $this->app->alias(Socialite::class, 'Socialite');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Menghindari error "Specified key was too long" di MySQL
        Schema::defaultStringLength(191);

        // Pastikan HTTPS di production
        if ($this->app->environment('production')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    }}
