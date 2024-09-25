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
        Schema::create('respostas_esp', function (Blueprint $table) {
            $table->bigIncrements('id_resposta');
            $table->string('orientacao')->nullable();
            $table->string('tempoResposta')->nullable();
            $table->string('ambienteFisico')->nullable();
            $table->string('orientacaoPres')->nullable();
            $table->string('tempoAnalise')->nullable();
            $table->string('prazoEntrega')->nullable();
            $table->string('integracaoOrgaos')->nullable();
            $table->string('facilidadeDigitais')->nullable();
            $table->string('avaliacaoGeral')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resposta_esp');
    }
};
