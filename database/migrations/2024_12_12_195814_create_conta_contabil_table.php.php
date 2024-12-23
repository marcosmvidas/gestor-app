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
        Schema::create('contas_contabil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classificacao', 14)->unique();
            $table->string('codigo_reduzido')->unique();
            $table->string('descricao');
            $table->enum('tipo', ['A', 'S']);
            $table->enum('natureza', ['D', 'C']);
            $table->string('cta_referencial_sped');
            $table->string('observacao');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
          
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas_contabil');
    }
};

