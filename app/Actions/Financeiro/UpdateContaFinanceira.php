<?php

namespace App\Actions\Financeiro;

use App\Models\ContaFinanceiraModel;
use App\Services\Validation\ContaFinanceiraValidate;

class UpdateContaFinanceira
{
    protected $validator;

    public function __construct(ContaFinanceiraValidate $validator)
    {
        $this->validator = $validator;
    }

    public function update(array $input, ContaFinanceiraModel $conta): ContaFinanceiraModel
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