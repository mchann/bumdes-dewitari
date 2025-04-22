<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Homestay extends Model

{

    protected $primaryKey = 'homestay_id';

    protected $fillable = [
        'nama_homestay',
        'alamat_homestay',
        'deskripsi',
        'fasilitas',
        'harga_per_malam',
        'status',
        'peraturan',
        'foto_homestay',
        'link_google_maps',
        'pemilik_id' // ← ini penting dimasukkan!
    ];

    public function pemilikProfile(): BelongsTo
    {
        return $this->belongsTo(PemilikProfile::class, 'pemilik_id','id');
    }

    // Homestay.php
public function pemilik()
{
    return $this->belongsTo(User::class, 'pemilik_id');
}
public function kamar()
{
    return $this->hasMany(Kamar::class, 'homestay_id', 'homestay_id');
}
Public function fasilitas()
    {
        return $this->belongsToMany(Fasilitas::class, 'kamar_fasilitas', 'kamar_id', 'fasilitas_id');
    }

}
