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
        dd('mount antes do response');  // Debug para ver a resposta da API ou consulta
        $response = $this->service->list();  // Supondo que seja uma API ou consulta
        // dd('mount');  // Debug para ver a resposta da API ou consulta
    
        if(isset($response['data'])) {
            $this->contas = $response['data'];
        } else {
            $this->contas = [];
        }
    }
        
    public function render()
    {
        dd($this->contas);  // Isso vai parar a execução e exibir o conteúdo da variável

        return view('livewire.contabilidade.conta-contabil-lista', [
            'contas' => $this->contas
        ]);
    }
}
