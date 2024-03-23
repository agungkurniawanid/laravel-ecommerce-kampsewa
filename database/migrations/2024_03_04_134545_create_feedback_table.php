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
        Schema::create('feedback', function (Blueprint $table) {
            $table->string('id_feedback', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->date('tanggal_feedback')->nullable(false);
            $table->text('deskripsi_feedback')->nullable(false);
            $table->enum('kriteria_feedback', ['Sangat Baik', 'Baik', 'Cukup', 'Kurang', 'Sangat Kurang']);
            $table->enum('status_feedback', ['Dibalas', 'Belum Dibalas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
