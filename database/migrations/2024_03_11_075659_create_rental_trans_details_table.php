<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_transaksi_penyewaan', function (Blueprint $table) {
            $table->string('id_detail_transaksi_penyewaan', 30)->primary();
            $table->string('id_transaksi_penyewaan', 20)->nullable(false);
            $table->foreign('id_transaksi_penyewaan')->references('id_transaksi_penyewaan')->on('transaksi_penyewaan');
            $table->string('id_produk', 20)->nullable(false);
            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->integer('qty');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_penyewaan');
    }
};
