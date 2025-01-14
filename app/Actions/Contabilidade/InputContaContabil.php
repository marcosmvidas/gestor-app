<?php

namespace App\Actions\Contabilidade;

class InputContaContabil
{
    public function prepare(array $input): array
    {
        return [
            'classificacao' => $input['classificacao'],
            'codigo_reduzido' => $input['codigo_reduzido'],
            'descricao' => $input['descricao'],
            'tipo' => $input['tipo'],
            'natureza' => $input['natureza'],
            'cta_referencial_sped' => $input['cta_referencial_sped'] ?? '',
            'observacao' => $input['observacao'] ?? '',
            'ativo' => $input['ativo'],
        ];
    }
}
