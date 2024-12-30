<div>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-blue-800">
            <i class="fa-solid fa-chart-bar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Contábil') }}
            </span>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2">
            <div class="overflow-hidden">
                <x-form-section submit="{{ $editing ? 'updateConta' : 'createConta' }}">
                    <x-slot name="title">
                        {{ $editing ? __('Editar Conta Contábil') : __('Nova Conta Contábil') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Preencha as informações no formulário.') }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="classificacao" value="{{ __('Classificação') }}" />
                            <x-input id="classificacao" type="text" class="mt-1 block w-full" wire:model.defer="classificacao" />
                            <x-input-error for="classificacao" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="codigo_reduzido" value="Código Reduzido" />
                            <x-input id="codigo_reduzido" type="text" class="mt-1 block w-full" wire:model.defer="codigo_reduzido" readonly />
                            <x-input-error for="codigo_reduzido" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <x-label for="descricao" value="{{ __('Descrição') }}" />
                            <x-input id="descricao" type="text" class="mt-1 block w-full" wire:model.defer="descricao" />
                            <x-input-error for="descricao" class="mt-2" />
                        </div>

                        <div class="col-span-2 sm:col-span-2">
                            <x-label for="tipo" value="Tipo" />
                            <select id="tipo" wire:model.defer="tipo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            <option value=""></option>
                            <option value="A">Analítica</option>
                            <option value="S">Sintética</option>
                            </select>
                            <x-input-error for="tipo" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="natureza" value="Natureza" />
                            <select id="natureza" wire:model.defer="natureza" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <option value=""></option>
                                <option value="D">Devedora</option>
                                <option value="C">Credora</option>
                            </select>
                            <x-input-error for="natureza" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="cta_referencial_sped" value="{{ __('Conta Referencial') }}" />
                            <x-input id="cta_referencial_sped" type="text" class="mt-1 block w-full" wire:model.defer="cta_referencial_sped" placeholder="SPED" />
                            <x-input-error for="cta_referencial_sped" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="observacao" value="{{ __('Observação') }}" />
                            <textarea id="observacao" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" wire:model.defer="observacao"></textarea>
                            <x-input-error for="observacao" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="ativo" value="{{ __('Ativo') }}" class="inline-flex relative items-center cursor-pointer"/>
                            <input type="checkbox" wire:model="ativo" value="1" @if($ativo) checked @endif />
                            <x-input-error for="ativo" class="mt-2" />
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-action-message class="me-3" on="saved">
                            {{ __('Saved.') }}
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
