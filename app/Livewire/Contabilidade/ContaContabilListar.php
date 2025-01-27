<?php

namespace App\Livewire\Contabilidade;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ContaContabilService;

class ContaContabilListar extends Component
{
    use WithPagination;

    public $ordenacao = 'classificacao';
    public $direcaoOrdenacao = 'asc';

    public function render()
    {
        $contas = app(ContaContabilService::class)->list(15, $this->ordenacao, $this->direcaoOrdenacao);

        return view('livewire.contabilidade.conta-contabil-listar', [
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
