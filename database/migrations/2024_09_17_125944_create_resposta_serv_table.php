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
        Schema::create('respostas_serv', function (Blueprint $table) {
            $table->id('id_resposta_serv');
            $table->string('protocolo')->nullable();
            $table->string('orientacao')->nullable();
            $table->string('tempoResposta')->nullable();
            $table->string('facilidadeServ')->nullable();
            $table->string('orientacaoPres')->nullable();
            $table->string('facilidadeOrientacao')->nullable();
            $table->string('expectativas')->nullable();
            $table->string('prazoEntregaServ')->nullable();
            $table->string('integracaoOrgaosServ')->nullable();
            $table->string('facilidadeDigitaisServ')->nullable();
            $table->string('probabilidade')->nullable();
            $table->string('avaliacaoGeralServ')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resposta_serv');
    }
};
