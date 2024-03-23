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
        Schema::create('transaksi_keuangan', function (Blueprint $table) {
            $table->string('id_transaksi_keuangan', 30)->primary();
            $table->enum('tipe_transaksi_keuangan', ['Pengeluaran', 'Pembayaran']);
            $table->integer('nominal_transaksi_keuangan')->nullable(false);
            $table->date('tanggal_transaksi_keuangan')->nullable(false);
            $table->text('deskripsi_transaksi_keuangan')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_keuangan');
    }
};
