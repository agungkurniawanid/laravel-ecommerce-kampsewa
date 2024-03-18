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
        Schema::create('transaksi_keuangans', function (Blueprint $table) {
            $table->string('id_transactionfinance', 20)->primary();
            $table->enum('transaction_type', ['Pengeluaran', 'Pembayaran']);
            $table->integer('amount_transactionfinance');
            $table->date('date_transactionfinance');
            $table->text('description_transactionfinance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_keuangans');
    }
};
