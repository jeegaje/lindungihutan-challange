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
        Schema::create('film', function (Blueprint $table) {
            $table->string('kd_film', 10)->primary();
            $table->string('nm_film', 55);
            $table->string('genre');
            $table->string('artis');
            $table->string('produser', 55);
            $table->integer('pendapatan');
            $table->integer('nominasi');
            $table->foreign('genre')->references('kd_genre')->on('genre');
            $table->foreign('artis')->references('kd_artis')->on('artis');
            $table->foreign('produser')->references('kd_produser')->on('produser');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
