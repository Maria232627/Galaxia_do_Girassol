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
        Schema::create('sistema_planetarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('qtd_planeta');
            $table->integer('qtd_estrela');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistema_planetarios');
    }
};
