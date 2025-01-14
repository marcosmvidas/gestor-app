<?php

namespace App\Actions\Rubrica;

use App\Models\RubricaModel;
use App\Services\Validation\RubricaValidate;

class UpdateRubrica
{
    protected $validator;

    public function __construct(RubricaValidate $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Atualiza uma rubrica existente.
     *
     * @param int $id
     * @param array $input
     * @return RubricaModel
     */
    public function update(int $id, array $input): RubricaModel
    {
        // Validação dos dados de entrada
        $this->validator->validate($input);

        // Localizando a rubrica a ser atualizada
        $rubrica = RubricaModel::findOrFail($id);

        // Atualizando os dados da rubrica
        $rubrica->update([
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
        ]);

        return $rubrica;
    }
}
