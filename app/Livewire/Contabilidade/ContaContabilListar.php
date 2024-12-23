<?php

namespace App\Livewire\Contabilidade;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\ContaContabilService;

class ContaContabilListar extends Component
{
    use WithPagination;

    public function render()
    {
        $contas = app(ContaContabilService::class)->list(10);

        return view('livewire.contabilidade.conta-contabil-listar', [
            'contas' => $contas,
        ])->layout('layouts.app');
    }
}
