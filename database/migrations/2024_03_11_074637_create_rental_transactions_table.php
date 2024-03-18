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
        Schema::create('rental_transactions', function (Blueprint $table) {
            $table->string('id_rentaltrans', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('id_product', 20)->nullable(false);
            $table->foreign('id_product')->references('id_product')->on('products');
            $table->date('date_transaction');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('total_price');
            $table->enum('payment_status', ['Lunas', 'Belum Lunas']);
            $table->enum('rental_status', ['Aktif', 'Completed', 'Cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_transactions');
    }
};
