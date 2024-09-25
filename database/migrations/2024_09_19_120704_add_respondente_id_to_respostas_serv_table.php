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
        Schema::table('respostas_serv', function (Blueprint $table) {
            $table->foreignId('respondente_id')->constrained('respondentes', 'id_respondente')->cascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('respostas_serv', function (Blueprint $table) {
            $table->dropForeign('respondente_id');
        });
    }
};
