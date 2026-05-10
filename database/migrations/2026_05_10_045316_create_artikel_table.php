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
    Schema::create('artikel', function (Blueprint $table) {
        $table->id('id_artikel'); // Sesuai primary key di model Anda
        $table->string('judul');
        $table->text('isi');
        $table->string('penulis');
        $table->date('tanggal_publikasi');
        $table->unsignedBigInteger('id_kategori');
        $table->enum('level_artikel', ['publik', 'internal', 'admin', 'private'])->default('publik');
        $table->string('gambar')->nullable();
        $table->timestamps();

        // Relasi Foreign Key
        $table->foreign('id_kategori')
              ->references('id_kategori')
              ->on('kategori')
              ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
