<?php

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => "Penulis $i",
                'email' => "penulis$i@example.com",
                'password' => Hash::make('password'),
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('kategori')->insert([
                'nama_kategori' => "Kategori $i", 
                'slug' => Str::slug("Kategori $i"),
                'deskripsi' => "Deskripsi untuk kategori $i",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $levels = ['publik', 'internal', 'admin', 'private'];

        for ($i = 1; $i <= 25; $i++) {
            DB::table('artikel')->insert([
                'judul' => "Judul Artikel Ke-$i",
                'isi' => "Ini adalah konten lengkap untuk artikel nomor $i.",
                'penulis' => "Penulis " . rand(1, 10), // Relasi ke User
                'tanggal_publikasi' => now(),
                'id_kategori' => rand(1, 5),
                'level_artikel' => $levels[array_rand($levels)],
                'gambar' => "https://picsum.photos/seed/artikel-$i/800/450",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}