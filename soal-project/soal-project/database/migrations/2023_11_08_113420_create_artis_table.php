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
        Schema::create('artis', function (Blueprint $table) {
            $table->string('kd_artis', 100)->primary();
            $table->string('nm_artis', 100);
            $table->string('jk', 100);
            $table->biginteger('bayaran');
            $table->integer('award');
            $table->string('negara', 100);
            $table->foreign('negara')->references('kd_negara')->on('negara');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artis');
    }
};
