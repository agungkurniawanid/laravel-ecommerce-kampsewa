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
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->string('id_pengeluaran', 20)->primary();
            $table->enum('kategori_pengeluaran', ['Operasional', 'Pemasaran', 'Lainnya']);
            $table->integer('nominal_pengeluaran');
            $table->date('tanggal_pengeluaran');
            $table->text('deskripsi_pengeluaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluaran');
    }
};
