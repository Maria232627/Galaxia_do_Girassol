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
        Schema::create('estrelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->floatval('diametro');
            $table->strign('descricao');
            $table->floatval('temperatura');
            $table->integer('idade');
            $table->floatval('gravidade');
            $table->timestamps();
            $table->bigIncrements('sistema_planetario');
            $table->foreign('sistema_planetario')->references('id')->on('sistema_planetario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estrelas');
    }
};
