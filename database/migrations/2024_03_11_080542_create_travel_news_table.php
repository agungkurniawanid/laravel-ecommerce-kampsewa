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
        Schema::create('travel_news', function (Blueprint $table) {
            $table->string('id_travelnews', 20)->primary();
            $table->string('title');
            $table->text('content_description');
            $table->string('auhtor');
            $table->date('published_date');
            $table->enum('category_travelnews', ['Wisata', 'Tips Perjalanan', 'Lainnya']);
            $table->text('image_travelnews');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_news');
    }
};
