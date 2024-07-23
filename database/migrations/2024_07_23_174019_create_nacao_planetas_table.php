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
        Schema::create('nacao_planetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qtd_ocupacao');
            $table->integer('qtd_colonizacao');
            $table->timestamps();
            $table->bigIncrements('nacao');
            $table->bigIncrements('planeta');
            $table->foreign('nacao')->references('id')->on('nacao');
            $table->foreign('planeta')->references('id')->on('planeta');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nacao_planetas');
    }
};
