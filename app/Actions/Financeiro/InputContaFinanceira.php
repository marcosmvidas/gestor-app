<?php

namespace App\Actions\Financeiro;

class InputContaFinanceira
{
    /**
     * Prepara os dados de entrada para criação ou atualização de uma conta financeira.
     *
     * @param array $input
     * @return array
     */
    public function prepare(array $input): array
    {
        return [
            'descricao' => trim($input['descricao']),
            'observacao' => $input['observacao'] ?? '',
            'chave_contabil' => (int) $input['chave_contabil'],
            'ativo' => isset($input['ativo']) ? (bool) $input['ativo'] : true,
        ];
    }
}
