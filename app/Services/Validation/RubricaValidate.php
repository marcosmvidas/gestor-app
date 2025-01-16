<?php

namespace App\Services\Validation;

use Illuminate\Support\Facades\Validator;

class RubricaValidate
{
    public static function validate(array $data, bool $isUpdate = false)
    {
        if (!isset($data['incidencias']) || $data['incidencias'] === null) {
            $data['incidencias'] = [];
        }

        $rules = [
            'codigo' => 'required|string|max:10',
            'descricao' => 'required|string',
            'tipo' => 'required|in:recebimento,desconto',
            'ordem_calculo' => 'nullable|integer',
            'natureza_rubrica' => 'nullable|integer',
            'chave_contabil' => 'nullable|integer',
            'chave_financeira' => 'nullable|integer',
            'incidencias' => 'nullable|array',
            'campo_trct' => 'nullable|integer',
            'exibe_em_folha' => 'boolean',
        ];

        if ($isUpdate) {
            $rules['codigo'] = 'required|string|max:10';
        }

        if (isset($data['incidencias']) && !is_array($data['incidencias'])) {
            throw new \InvalidArgumentException('O campo "incidencias" deve ser um array.');
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new \InvalidArgumentException($validator->errors()->first());
        }
    }
}
