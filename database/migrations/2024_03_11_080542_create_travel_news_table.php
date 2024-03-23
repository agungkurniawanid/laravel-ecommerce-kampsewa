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
        Schema::create('berita_wisata', function (Blueprint $table) {
            $table->string('id_berita_wisata', 20)->primary();
            $table->string('title_berita_wisata');
            $table->text('deskripsi_konten');
            $table->string('author_berita_wisata');
            $table->date('tanggal_publish');
            $table->enum('kategori_berita_wisata', ['Wisata', 'Tips Perjalanan', 'Lainnya']);
            $table->text('gambar_berita_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_wisata');
    }
};
