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
        Schema::create('balasan_feedback', function (Blueprint $table) {
            $table->string('id_balasan_feedback', 20)->primary();
            $table->string('id_feedback', 20)->nullable(false);
            $table->foreign('id_feedback')->references('id_feedback')->on('feedback');
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->date('tanggal_balasan_feedback')->nullable(false);
            $table->text('deskripsi_balasan_feedback')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
    }
};
