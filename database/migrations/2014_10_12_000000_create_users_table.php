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
            $table->string('id_user', 20)->primary();
            $table->char('fullname', 50)->nullable(false);
            $table->char('number_phone', 13)->nullable(false);
            $table->string('password')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable(false);
            $table->text('photo')->nullable(true);
            $table->enum('level', ['Developer', 'Customer'])->nullable(false);
            $table->string('bio', 255)->nullable(true);
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
