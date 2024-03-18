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
        Schema::create('adverts', function (Blueprint $table) {
            $table->string('id_advert', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('heading_advert', 50)->nullable(false);
            $table->text('description_advert')->nullable(false);
            $table->integer('budget_advert')->nullable(false);
            $table->enum('advert_status', ['Aktif', 'Non-Aktif']);
            $table->date('date_created_advert');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
