<?php

namespace App\Livewire\Contabilidade;

use Livewire\Component;

class PlanoContasForm extends Component
{
    public function render()
    {
        return view('livewire.contabilidade.plano-contas-form')->layout('layouts.app');
    }
}
