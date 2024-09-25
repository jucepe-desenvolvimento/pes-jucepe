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
        Schema::create('respondentes', function (Blueprint $table) {
            $table->bigIncrements('id_respondente');
            $table->string('nome')->nullable();            
            $table->string('email')->nullable();            
            $table->string('telefone')->nullable();            
            $table->string('consentimento_lgpd')->nullable();            
            $table->boolean('respondenteAnon')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respondente');
    }
};
