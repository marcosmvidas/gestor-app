<?php

namespace App\Actions\Contabilidade;

class InputContaContabil
{
    /**
     * Prepara os dados de entrada para criação ou atualização de uma conta contabil.
     *
     * @param array $input
     * @return array
     */
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
