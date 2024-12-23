<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContaContabilModel;

class ContaContabilForm extends Component
{
    public $classificacao;
    public $codigo_reduzido;
    public $descricao;
    public $tipo;
    public $conta;

    // Método para carregar dados da conta, se for uma edição
    public function mount($id = null)
    {
        if ($id) {
            $this->conta = ContaContabilModel::find($id);
            $this->classificacao = $this->conta->classificacao;
            $this->codigo_reduzido = $this->conta->codigo_reduzido;
            $this->descricao = $this->conta->descricao;
            $this->tipo = $this->conta->tipo;
        } else {
            $this->conta = new ContaContabilModel();
        }
    }

    // Método para salvar ou atualizar a conta contábil
    public function save()
    {
        $this->validate([
            'classificacao' => 'required|string',
            'codigo_reduzido' => 'required|string',
            'descricao' => 'required|string',
            'tipo' => 'required|string',
        ]);

        if ($this->conta->exists) {
            // Atualizar a conta existente
            $this->conta->update([
                'classificacao' => $this->classificacao,
                'codigo_reduzido' => $this->codigo_reduzido,
                'descricao' => $this->descricao,
                'tipo' => $this->tipo,
            ]);
            session()->flash('message', 'Conta contábil atualizada com sucesso.');
        } else {
            // Criar uma nova conta
            ContaContabilModel::create([
                'classificacao' => $this->classificacao,
                'codigo_reduzido' => $this->codigo_reduzido,
                'descricao' => $this->descricao,
                'tipo' => $this->tipo,
            ]);
            session()->flash('message', 'Conta contábil criada com sucesso.');
        }

        // Redireciona ou limpa os dados após salvar
        return redirect()->route('contabilidade.conta-contabil-lista');
    }

    public function render()
    {
        return view('livewire.conta-contabil-form');
    }
}
