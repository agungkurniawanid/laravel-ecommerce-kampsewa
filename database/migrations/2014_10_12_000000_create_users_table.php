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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama_lengkap', 50)->nullable(false);
            $table->char('nomor_telfon', 13)->nullable(false);
            $table->char('password', 20)->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
