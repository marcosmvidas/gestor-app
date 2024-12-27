<?php

namespace App\Services\Validation;

use Illuminate\Support\Facades\Validator;

class ContaContabilValidate
{
    /**
     * Valida os dados de entrada para a conta contábil.
     *
     * @param array $data
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validate(array $data): void
    {
        Validator::make($data, [
            'classificacao' => 'required|string|max:255',
            'codigo_reduzido' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'tipo' => 'nullable|in:A,S',
            'natureza' => 'nullable|in:D,C',
            'cta_referencial_sped' => 'nullable|string|max:255',
            'observacao' => 'nullable|string',
            'ativo' => 'required|boolean',
        ])->validate();
    }
}
