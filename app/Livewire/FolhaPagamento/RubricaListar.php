<?php

namespace App\Livewire\FolhaPagamento;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\RubricaService;

class RubricaListar extends Component
{
    use WithPagination;

    public $ordenacao = 'descricao';
    public $direcaoOrdenacao = 'asc';

    public function render()
    {
        $rubricas = app(RubricaService::class)->list(15, $this->ordenacao, $this->direcaoOrdenacao);

        return view('livewire.folha-pagamento.rubrica-listar', [
            'rubricas' => $rubricas,
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
