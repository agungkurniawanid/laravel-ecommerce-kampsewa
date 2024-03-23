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
        Schema::create('produk', function (Blueprint $table) {
            $table->string('id_produk', 20)->primary()->nullable(false);
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('nama_produk', 50)->nullable(false);
            $table->text('deskripsi_produk')->nullable(false);
            $table->integer('harga_produk')->nullable(false);
            $table->integer('stok_produk')->nullable(false);
            $table->enum('status_produk', ['Tersedia', 'Tidak Tersedia']);
            $table->text('gambar_depan')->nullable(false);
            $table->text('gambar_kiri')->nullable(false);
            $table->text('gambar_kanan')->nullable(false);
            $table->text('gambar_belakang')->nullable(false);
            $table->enum('kategori_produk', ['Tenda', 'Sleeping Bag', 'Kompor', 'Perlengkapan Masak', 'Perkakas Pendakian']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
