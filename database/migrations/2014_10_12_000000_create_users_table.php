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
            $table->string('id')->primary();
            $table->char('nama_lengkap', 50)->nullable(false);
            $table->char('nomor_telfon', 13)->nullable(false);
            $table->string('password')->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable(false);
            $table->text('foto')->nullable(true);
            $table->enum('level', ['Developer', 'Customer'])->nullable(false);
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
