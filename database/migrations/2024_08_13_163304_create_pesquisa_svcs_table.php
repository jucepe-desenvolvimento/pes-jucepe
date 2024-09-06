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
        Schema::create('pesquisa_svcs', function (Blueprint $table) {
            $table->string('servicos');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('lgpdConsent');
            $table->string('satisfacao');
            $table->string('facilidade');
            $table->string('expectativa');
            $table->string('probabilidade');
            $table->string('qualidadeAtendimento');
            $table->string('qualidade');
            $table->text('sugestoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesquisa_svcs');
    }
};
