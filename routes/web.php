<?php

use App\Livewire\{
    Contabilidade\ContaContabilListar,
    Contabilidade\PlanoContasForm,
    Financeiro\ContaFinanceiraListar,    
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('financeiro', function () {
        return view('financeiro.index');
    })->name('financeiro');
    Route::get('financeiro/conta-financeira-listar', ContaFinanceiraListar::class)->name('financeiro.conta-financeira-listar');

    // route contabilidade 
    Route::get('contabilidade', function () { 
        return view('contabilidade.index');
    })->name('contabilidade');
    Route::get('contabilidade/conta-contabil-listar', ContaContabilListar::class)->name('contabilidade.conta-contabil-listar');
    Route::get('contabilidade/plano-contas-form', PlanoContasForm::class)->name('contabilidade.plano-contas-form');
    Route::get('contabilidade/plano-contas-form/{contaId?}', PlanoContasForm::class)->name('contabilidade.plano-contas-form');

    Route::get('fiscal', function () {
        return view('fiscal.index');
    })->name('fiscal');

    Route::get('recursos-humanos', function () {
        return view('recursos-humanos.index');
    })->name('recursos-humanos');
});
