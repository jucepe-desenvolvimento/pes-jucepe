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
        Schema::create('pesquisa_es', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('lgpdConsent');
            $table->string('anonymous')->nullable();
            $table->string('produto');
            $table->string('orientacao');
            $table->string('tempoResposta');
            $table->string('ambienteFisico');
            $table->string('duvidasEsclarecimentos');
            $table->string('tempoAnalise');
            $table->string('prazoEntrega');
            $table->string('integracaoOrgaos');
            $table->string('facilidadeUso');
            $table->string('avaliacaoGeral');
            $table->string('qualidadeAtendimento');
            $table->string('textoAdicional');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesquisa_es');
    }
};
