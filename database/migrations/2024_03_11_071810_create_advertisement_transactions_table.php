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
        Schema::create('advertisement_transactions', function (Blueprint $table) {
            $table->string('id_advtrans', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('id_advert', 20)->nullable(false);
            $table->foreign('id_advert')->references('id_advert')->on('adverts');
            $table->date('date_transaction');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('amount_transaction');
            $table->enum('payment_status', ['Lunas', 'Belum Lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisement_transactions');
    }
};
