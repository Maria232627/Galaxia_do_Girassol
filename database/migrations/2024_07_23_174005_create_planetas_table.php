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
        Schema::create('planetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->float('diametro');
            $table->string('descricao');
            $table->float('temperatura');
            $table->integer('idade');
            $table->float('gravidade');
            $table->boolean('habitabilidade');
            $table->integer('qtd_satelite_natural');
            $table->timestamps();
            $table->unsignedBigInteger('sistema_planetario');
            $table->foreign('sistema_planetario')->references('id')->on('sistema_planetarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planetas');
    }
};
