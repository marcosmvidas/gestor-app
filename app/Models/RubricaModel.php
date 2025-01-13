<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RubricaModel extends Model
{
    use HasFactory;

    protected $table = 'rubricas';

    protected $fillable = [
        'codigo',
        'descricao',
        'tipo',
        'ordem_calculo',
        'natureza_rubrica',
        'chave_contabil',
        'chave_financeira',
        'incidencias',
        'campo_trct',
        'exibe_em_folha',
    ];

    protected $casts = [
        'incidencias' => 'array',
        'exibe_em_folha' => 'boolean',
    ];
}
