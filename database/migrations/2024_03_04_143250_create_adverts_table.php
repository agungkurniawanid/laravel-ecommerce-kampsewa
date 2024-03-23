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
        Schema::create('iklan', function (Blueprint $table) {
            $table->string('id_iklan', 20)->primary();
            $table->string('id_user', 20)->nullable(false);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('judul_iklan', 50)->nullable(false);
            $table->text('deskripsi_iklan')->nullable(false);
            $table->integer('nominal_iklan')->nullable(false);
            $table->enum('status_iklan', ['Aktif', 'Non-Aktif']);
            $table->date('tanggal_pembuatan_iklan')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iklan');
    }
};
