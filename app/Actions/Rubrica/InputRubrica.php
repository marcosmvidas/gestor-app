<?php

namespace App\Actions\Rubrica;

class InputRubrica
{
    public function prepare(array $input): array
    {
        return [
            'codigo' => $input['codigo'],
            'descricao' => $input['descricao'],
            'tipo' => $input['tipo'],
            'ordem_calculo' => $input['ordem_calculo'] ?? '',
            'natureza_rubrica' => $input['natureza_rubrica'] ?? '',
            'chave_contabil' => $input['chave_contabil'] ?? '',
            'chave_financeira' => $input['chave_financeira'] ?? '',
            'incidencias' => json_encode($input['incidencias'] ?? []),
            'campo_trct' => $input['campo_trct'] ?? '',
            'exibe_em_folha' => $input['exibe_em_folha'] ?? true,
        ];
    }
}
