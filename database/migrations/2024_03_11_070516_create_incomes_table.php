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
        Schema::create('pemasukan', function (Blueprint $table) {
            $table->string('id_pemasukan', 20)->primary();
            $table->enum('sumber_pemasukan', ['Iklan', 'Layanan']);
            $table->integer('nominal_pemasukan')->nullable(false);
            $table->date('tanggal_pemasukan')->nullable(false);
            $table->text('deskripsi_pemasukan')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukan');
    }
};
