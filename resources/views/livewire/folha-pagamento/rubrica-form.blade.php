<div>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-blue-800">
            <i class="fa-solid fa-chart-bar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Rubricas') }}
            </span>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2">
            <div class="overflow-hidden">
                <x-form-section submit="{{ $editing ? 'updateRubrica' : 'createRubrica' }}">
                    <x-slot name="title">
                        {{ $editing ? __('Editar Rubrica') : __('Nova Rubrica') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Preencha as informações no formulário abaixo.') }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="codigo" value="{{ __('Código') }}" />
                            <x-input id="codigo" type="text" class="mt-1 block w-full" wire:model.defer="codigo" />
                            <x-input-error for="codigo" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="descricao" value="{{ __('Descrição') }}" />
                            <x-input id="descricao" type="text" class="mt-1 block w-full" wire:model.defer="descricao" />
                            <x-input-error for="descricao" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="tipo" value="{{ __('Tipo') }}" />
                            <select id="tipo" wire:model.defer="tipo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <option value=""></option>
                                <option value="recebimento">{{ __('Recebimento') }}</option>
                                <option value="desconto">{{ __('Desconto') }}</option>
                            </select>
                            <x-input-error for="tipo" class="mt-2" />
                        </div>

                        <!-- Ordem Cálculo -->
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="ordem_calculo" value="{{ __('Ordem de Cálculo') }}" />
                            <x-input id="ordem_calculo" type="number" class="mt-1 block w-full" wire:model.defer="ordem_calculo" />
                            <x-input-error for="ordem_calculo" class="mt-2" />
                        </div>

                        <!-- Natureza da Rubrica -->
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="natureza_rubrica" value="{{ __('Natureza da Rubrica') }}" />
                            <x-input id="natureza_rubrica" type="number" class="mt-1 block w-full" wire:model.defer="natureza_rubrica" />
                            <x-input-error for="natureza_rubrica" class="mt-2" />
                        </div>

                        <!-- Chave Contábil -->
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="chave_contabil" value="{{ __('Chave Contábil') }}" />
                            <x-input id="chave_contabil" type="number" class="mt-1 block w-full" wire:model.defer="chave_contabil" />
                            <x-input-error for="chave_contabil" class="mt-2" />
                        </div>

                        <!-- Chave Financeira -->
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="chave_financeira" value="{{ __('Chave Financeira') }}" />
                            <x-input id="chave_financeira" type="number" class="mt-1 block w-full" wire:model.defer="chave_financeira" />
                            <x-input-error for="chave_financeira" class="mt-2" />
                        </div>

                        <!-- Incidências -->
                        <div class="col-span-6">
                            <x-label for="incidencias" value="{{ __('Incidências') }}" />
                            <textarea id="incidencias" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" wire:model.defer="incidencias"></textarea>
                            <x-input-error for="incidencias" class="mt-2" />
                        </div>

                        <!-- Campo TRCT -->
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="campo_trct" value="{{ __('Campo TRCT') }}" />
                            <x-input id="campo_trct" type="number" class="mt-1 block w-full" wire:model.defer="campo_trct" />
                            <x-input-error for="campo_trct" class="mt-2" />
                        </div>

                        <!-- Exibe em Folha -->
                        <div class="col-span-6">
                            <x-label for="exibe_em_folha" value="{{ __('Exibir em Folha') }}" class="inline-flex relative items-center cursor-pointer" />
                            <input type="checkbox" wire:model.defer="exibe_em_folha" value="1" class="mt-1" />
                            <x-input-error for="exibe_em_folha" class="mt-2" />
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-action-message class="me-3" on="saved">
                            {{ __('Salvo com sucesso.') }}
                        </x-action-message>
                        <x-button>
                            {{ $editing ? __('Alterar') : __('Salvar') }}
                        </x-button>
                    </x-slot>
                </x-form-section>

                <x-section-border />
            </div>
        </div>
    </div>
</div>
