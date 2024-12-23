<?php

use App\Livewire\Contabilidade\ContaContabilListar;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('contabilidade', function () {
        return view('contabilidade.index');
    })->name('contabilidade');

    Route::get('contabilidade/conta-contabil-listar', ContaContabilListar::class)->name('contabilidade.conta-contabil-listar');

    Route::get('/fiscal', function () {
        return view('fiscal.index');
    })->name('fiscal');
});
