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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('requisitos');
            $table->string('beneficios');
            $table->string('outras_informacoes');
            $table->string('link_candidatura');
            $table->string('nome_empresa');
            $table->string('logotipo_empresa')->default('https://images.tcdn.com.br/img/img_prod/840618/livre_teste_95_1_885fa8156198b5e059f20c92b095ecfc.jpg');
            $table->dateTime('data_expiracao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
