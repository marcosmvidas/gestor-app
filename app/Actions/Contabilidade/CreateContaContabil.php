<?php

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;
use App\Services\Validation\ContaContabilValidate;

class CreateContaContabil
{
    protected $validator;

    public function __construct(ContaContabilValidate $validator)
    {
        $this->validator = $validator;
    }

    public function create(array $input): ContaContabilModel
    {
        $this->validator->validate($input);

        return ContaContabilModel::create([
            'classificacao' => $input['classificacao'],
            'codigo_reduzido' => $input['codigo_reduzido'],
            'descricao' => $input['descricao'],
            'tipo' => $input['tipo'],
            'natureza' => $input['natureza'],
            'cta_referencial_sped' => $input['cta_referencial_sped'] ?? '',
            'observacao' => $input['observacao'] ?? '',
            'ativo' => $input['ativo'],
        ]);
    }
}