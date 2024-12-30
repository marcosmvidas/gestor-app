<?php

namespace App\Livewire\Financeiro;

use Livewire\Component;

class PlanoContasForm extends Component
{
    public function render()
    {
        return view('livewire.financeiro.plano-contas-form')->layout('layouts.app');
    }
}
