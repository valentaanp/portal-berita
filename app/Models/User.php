<?php

// namespace App\Models;

// // use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Database\Factories\UserFactory;
// use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// #[Fillable(['name', 'email', 'password'])]
// #[Hidden(['password', 'remember_token'])]
// class User extends Authenticatable
// {
//     /** @use HasFactory<UserFactory> */
//     use HasFactory, Notifiable;

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Sesuai rancangan Anda: Tidak menggunakan atribut 'id'.
     * Kita atur 'username' sebagai Primary Key.
     */
    protected $primaryKey = 'username';

    /**
     * Karena Primary Key adalah string (bukan angka), 
     * kita harus menonaktifkan auto-increment.
     */
    public $incrementing = false;

    /**
     * Tipe data dari Primary Key adalah string.
     */
    protected $keyType = 'string';

    /**
     * Sesuaikan atribut fillable dengan rencana Class User Anda.
     * Tambahkan 'username', 'namaLengkap', 'role', dan 'email'.
     */
    protected $fillable = [
        'username',
        'password',
        'namaLengkap',
        'email',
        'role',
    ];

    /**
     * Atribut yang harus disembunyikan (untuk keamanan).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting data agar password otomatis terenkripsi/hash.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Memastikan Laravel tahu password adalah data ter-hash.
        ];
    }
}