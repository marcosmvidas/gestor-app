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
        Schema::create('rubricas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 10)->unique();
            $table->string('descricao');
            $table->enum('tipo', ['recebimento', 'desconto']);
            $table->integer('ordem_calculo')->unsigned();
            $table->integer('natureza_rubrica')->unsigned();
            $table->integer('chave_contabil')->unsigned();
            $table->integer('chave_financeira')->unsigned();
            $table->json('incidencias');
            $table->integer('campo_trct')->unsigned();
            $table->boolean('exibe_em_folha')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rubricas');
    }
};
