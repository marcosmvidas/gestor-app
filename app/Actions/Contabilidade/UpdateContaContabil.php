<?php

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;
use App\Services\Validation\ContaContabilValidate;

class UpdateContaContabil
{
    protected $validator;

    public function __construct(ContaContabilValidate $validator)
    {
        $this->validator = $validator;
    }

    public function update(array $input, ContaContabilModel $conta): ContaContabilModel
    {
        $this->validator->validate($input);

        $updated = $conta->update([
            'classificacao' => $input['classificacao'],
            'codigo_reduzido' => $input['codigo_reduzido'],
            'descricao' => $input['descricao'],
            'tipo' => $input['tipo'],
            'natureza' => $input['natureza'],
            'cta_referencial_sped' => $input['cta_referencial_sped'] ?? '',
            'observacao' => $input['observacao'] ?? '',
            'ativo' => $input['ativo'],
        ]);

        if (!$updated) {
            throw new \Exception('Erro ao atualizar a conta contábil.');
        }

        return $conta;
    }
}