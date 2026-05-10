<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    // Nama tabel di database
    protected $table = 'kategori';

    // Primary Key (karena bukan 'id', harus didefinisikan)
    protected $primaryKey = 'id_kategori';

    // Kolom yang boleh diisi secara massal
    protected $fillable = ['nama_kategori', 'slug', 'deskripsi'];

    /**
     * Relasi: Satu Kategori memiliki banyak Artikel
     */
    public function artikels(): HasMany
    {
        return $this->hasMany(Artikel::class, 'id_kategori', 'id_kategori');
    }
}