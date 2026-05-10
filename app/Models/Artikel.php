<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'judul', 
        'isi', 
        'penulis', 
        'tanggal_publikasi', 
        'id_kategori', 
        'level_artikel', 
        'gambar'
    ];

    /**
     * Relasi: Setiap Artikel dimiliki oleh satu Kategori
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}