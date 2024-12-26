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
                <x-form-section submit="create">
                    <x-slot name="title">
                        {{ __('Conta contabil')}}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('')}}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="classificacao" value="{{ __('Classificação') }}" />
                            <x-input id="classificacao" type="text" class="mt-1 block w-full" wire:model.defer="classificacao" />
                            <x-input-error for="classificacao" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="codigo" value="Código reduzido" />
                            <x-input id="codigo" type="text" class="mt-1 block w-full" wire:model.defer="codigo" />
                            <x-input-error for="codigo" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <x-label for="descricao" value="{{ __('Descrição') }}" />
                            <x-input id="descricao" type="text" class="mt-1 block w-full" wire:model.defer="descricao" />
                            <x-input-error for="descricao" class="mt-2" />
                        </div>


                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="tipo" value="Tipo" />
                            <select id="tipo" wire:model.defer="tipo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Selecione</option>
                                <option value="Analítica">Analítica</option>
                                <option value="Sintética">Sintética</option>
                            </select>
                            <x-input-error for="tipo" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="categoria" value="Categoria" />
                            <select id="categoria" wire:model.defer="categoria" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Selecione</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Passivo">Passivo</option>
                                <option value="Receita">Receita</option>
                                <option value="Despesa">Despesa</option>
                                <option value="Resultado">Resultado</option>
                            </select>
                            <x-input-error for="categoria" class="mt-2" />
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-action-message class="me-3" on="saved">
                            {{ __('Saved.') }}
                        </x-action-message>
                        <x-button>
                            {{ __('Save') }}
                        </x-button>                        
                    </x-slot>
                    
                    </x-form-section>

                <x-section-border />

            </div>
        </div>
    </div>
</div>
