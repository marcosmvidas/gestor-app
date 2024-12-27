<?php

namespace App\Services\Validation;

use Illuminate\Support\Facades\Validator;

class ContaContabilValidate
{
    /**
     * Valida os dados de entrada para a conta contábil.
     *
     * @param array $data
     * @return \Illuminate\Validation\Validator
     */
    public function validate(array $data)
    {
        $rules = [
            'classificacao' => 'required|string|max:14',
            'descricao' => 'required|string',
            'tipo' => 'nullable|in:A,S',
            'natureza' => 'nullable|in:D,C',
            'cta_referencial_sped' => 'nullable|string',
            'observacao' => 'nullable|string',
            'ativo' => 'required|boolean',
        ];

        return Validator::make($data, $rules);
    }
}
