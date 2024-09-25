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
        Schema::table('respostas_esp', function (Blueprint $table) {
            $table->foreignId('pesquisa_id')->constrained('pesquisas', 'id_pesquisa')->cascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('respostas_esp', function (Blueprint $table) {
            $table->dropForeign('pesquisa_id');
        });
    }
};
