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
        Schema::create('transaksi_iklan', function (Blueprint $table) {
            $table->string('id_transaksi_iklan', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('id_iklan', 20)->nullable(false);
            $table->foreign('id_iklan')->references('id_iklan')->on('iklan');
            $table->date('tanggal_transaksi_iklan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('nominal_iklan');
            $table->enum('status_pembayaran', ['Lunas', 'Belum Lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_iklan');
    }
};
