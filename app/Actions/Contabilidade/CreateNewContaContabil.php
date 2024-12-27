<?php

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;
use Illuminate\Support\Facades\Validator;

class CreateNewContaContabil
{
    public function create(array $input): ContaContabilModel
    {
        $this->validate($input);

        return ContaContabilModel::create([
            'classificacao' => $input['classificacao'],
            'codigo_reduzido' => $input['codigo_reduzido'],
            'descricao' => $input['descricao'],
            'tipo' => $input['tipo'],
            'natureza' => $input['natureza'],
            'cta_referencial_sped' => $input['cta_referencial_sped'] ?? '',
            'observacao' => $input['observacao'] ?? '',
            'ativo' => $input['ativo'],
        ]);
    }

    private function validate(array $input)
    {
        Validator::make($input, [
            'classificacao' => ['required', 'string', 'max:255'],
            'codigo_reduzido' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string', 'max:255'],
            'tipo' => ['required', 'in:A,S'],
            'natureza' => ['required', 'in:D,C'],
            'cta_referencial_sped' => ['nullable', 'string', 'max:255'],
            'observacao' => ['nullable', 'string'],
            'ativo' => ['required', 'boolean'],
        ])->validate();
    }
}
