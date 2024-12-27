<?php 

namespace App\Actions\Contabilidade;

use App\Models\ContaContabilModel;
use Illuminate\Support\Facades\Validator;

class UpdateContaContabil
{
    public function update(array $input, ContaContabilModel $conta): ContaContabilModel
    {
        Validator::make($input, [
            'classificacao' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string', 'max:255'],
            'tipo' => ['required', 'in:Analítica,Sintética'],
            'categoria' => ['required', 'in:Ativo,Passivo,Receita,Despesa,Resultado'],
            'ativo' => ['required', 'boolean'],
        ])->validate();

        $conta->update([
            'classificacao' => $input['classificacao'],
            'descricao' => $input['descricao'],
            'tipo' => $input['tipo'],
            'categoria' => $input['categoria'],
            'ativo' => $input['ativo'],
        ]);

        return $conta;
    }
}
