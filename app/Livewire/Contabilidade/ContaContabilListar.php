<?php

namespace App\Livewire\Contabilidade;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ContaContabilService;

class ContaContabilListar extends Component
{
    use WithPagination;

    public $ordenacao = 'classificacao'; // Exemplo de campo para ordenação, você pode mudar conforme necessário
    public $direcaoOrdenacao = 'asc'; // 'asc' ou 'desc'

    public function render()
    {
        // Pegando as contas ordenadas
        $contas = app(ContaContabilService::class)->list(10, $this->ordenacao, $this->direcaoOrdenacao);

        return view('livewire.contabilidade.conta-contabil-listar', [
            'contas' => $contas,
        ])->layout('layouts.app');
    }

    // Método para alternar a ordenação
    public function ordenarPor($campo)
    {
        if ($this->ordenacao === $campo) {
            // Inverter a direção da ordenação se o campo já estiver sendo usado
            $this->direcaoOrdenacao = $this->direcaoOrdenacao === 'asc' ? 'desc' : 'asc';
        } else {
            // Caso o campo seja diferente, ordena pelo novo campo na ordem ascendente
            $this->ordenacao = $campo;
            $this->direcaoOrdenacao = 'asc';
        }
    }
}
