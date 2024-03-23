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
        Schema::create('transaksi_penyewaan', function (Blueprint $table) {
            $table->string('id_transaksi_penyewaan', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('id_produk', 20)->nullable(false);
            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->date('tanggal_transaksi_penyewaan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('total_harga_penyewaan');
            $table->enum('status_pembayaran', ['Lunas', 'Belum Lunas']);
            $table->enum('status_penyewaan', ['Aktif', 'Completed', 'Cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penyewaan');
    }
};
