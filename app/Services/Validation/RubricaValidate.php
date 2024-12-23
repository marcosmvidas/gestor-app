<?php

namespace App\Services\Validation;

use Illuminate\Support\Facades\Validator;

class RubricaValidate
{
    public static function validate(array $data, bool $isUpdate = false)
    {
        $rules = [
            'codigo' => 'required|string|max:10|unique:rubricas,codigo',
            'descricao' => 'required|string',
            'tipo' => 'required|in:recebimento,desconto',
            'ordem_calculo' => 'required|integer',
            'natureza_rubrica' => 'required|integer',
            'chave_contabil' => 'required|integer',
            'chave_financeira' => 'required|integer',
            'incidencias' => 'required|array',
            'campo_trct' => 'required|integer',
            'exibe_em_folha' => 'boolean',
        ];

        if ($isUpdate) {
            $rules['codigo'] = 'required|string|max:10';
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            throw new \InvalidArgumentException($validator->errors()->first());
        }
    }
}
