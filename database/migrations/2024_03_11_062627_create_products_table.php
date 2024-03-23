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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id_product', 20)->primary()->nullable(false);
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('product_name', 50)->nullable(false);
            $table->text('description_product')->nullable(false);
            $table->integer('price_product')->nullable(false);
            $table->integer('stock_product')->nullable(false);
            $table->enum('status_product', ['Tersedia', 'Tidak Tersedia']);
            $table->text('image-front')->nullable(false);
            $table->text('image-left')->nullable(false);
            $table->text('image-right')->nullable(false);
            $table->text('image-back')->nullable(false);
            $table->enum('category_product', ['Tenda', 'Sleeping Bag', 'Kompor', 'Perlengkapan Masak', 'Perkakas Pendakian']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
