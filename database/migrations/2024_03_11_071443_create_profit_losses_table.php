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
        Schema::create('keuntungan_kerugian', function (Blueprint $table) {
            $table->string('id_keuntungan_kerugian', 30)->primary();
            $table->date('tanggal_keuntungan_kerugian');
            $table->integer('total_pemasukan');
            $table->integer('total_pengeluaran');
            $table->integer('keuntungan');
            $table->integer('kerugian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuntungan_kerugian');
    }
};
