<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pemilik_profiles', function (Blueprint $table) {
            $table->string('nama_lengkap')->nullable()->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('pemilik_profiles', function (Blueprint $table) {
            $table->string('nama_lengkap')->nullable(false)->change();
        });
    }
    
};
