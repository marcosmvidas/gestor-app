<?php

namespace App\Livewire\Contabilidade\ContaContabil;

use Livewire\Component;
use App\Services\ContaContabilService;

class ContaContabil extends Component
{
    public $contas;

    public $service;


    public function mount(ContaContabilService $service)
    {
        $response = $this->service->list();

        if(isset($response['data'])) {
            $this->contas = $response['data'];
        } else {
            $this->contas = [];
        }
    }

    public function render()
    {

        return view('livewire.contabilidade.conta-contabil-lista', [
            'contas' => $this->contas
        ]);
    }
}
