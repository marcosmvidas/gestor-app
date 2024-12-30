<?php

namespace App\Livewire\Financeiro;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ContaFinanceiraService;

class ContaFinanceiraListar extends Component
{
    use WithPagination;

    public $ordenacao = 'descricao';
    public $direcaoOrdenacao = 'asc';

    public function render()
    {
        $contas = app(ContaFinanceiraService::class)->list(15, $this->ordenacao, $this->direcaoOrdenacao);

        return view('livewire.financeiro.conta-financeira-listar', [
            'contas' => $contas,
        ])->layout('layouts.app');
    }

    public function ordenarPor($campo)
    {
        if ($this->ordenacao === $campo) {
            $this->direcaoOrdenacao = $this->direcaoOrdenacao === 'asc' ? 'desc' : 'asc';
        } else {
            $this->ordenacao = $campo;
            $this->direcaoOrdenacao = 'asc';
        }
    }
}
