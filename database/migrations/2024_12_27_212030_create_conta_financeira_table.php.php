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
        Schema::create('contas_financeira', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao')->unique();
            $table->string('observacao');
            $table->integer('chave_contabil')->unsigned();
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas_financeira');
    }
};
