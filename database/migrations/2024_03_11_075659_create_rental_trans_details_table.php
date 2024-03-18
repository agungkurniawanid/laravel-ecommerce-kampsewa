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
        Schema::create('rental_trans_details', function (Blueprint $table) {
            $table->string('id_rentaltransdet', 20)->primary();
            $table->string('id_rentaltrans', 20)->nullable(false);
            $table->foreign('id_rentaltrans')->references('id_rentaltrans')->on('rental_transactions');
            $table->string('id_product', 20)->nullable(false);
            $table->foreign('id_product')->references('id_product')->on('products');
            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_trans_details');
    }
};
