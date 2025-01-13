<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-2 text-2xl">
            <i class="fa-solid fa-boxes-stacked" aria-hidden="true"></i>
                <span class="font-semibold leading-tight">
                {{ __('Depto Compras') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-gray-100">
                <div class="grid grid-cols-2 gap-1 p-6">
                <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa-solid fa-dolly" aria-hidden="true"></i>
                            Produto
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Cadastro</a></li>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Listagem</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa-solid fa-barcode" aria-hidden="true"></i>
                            Etiqueta e Codificação
                        </h2>
                        <ul class="list-disc p-5">
                        <li><a href="#" class="hover:text-sm hover:font-semibold">Imprimir</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa-solid fa-boxes-packing" aria-hidden="true"></i>
                            Entrada
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Recebimento</a></li>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Conciliação</a>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Contas a pagar</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="tooltip w-full text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600"
                            data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa-solid fa-cubes-stacked" aria-hidden="true"></i>
                            Armazenagem e Localização
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Visualizar</a></li>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Imprimir</a></li></a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="tooltip w-full text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600"
                            data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa-regular fa-folder-open" aria-hidden="true"></i>
                            Planejamento e Controle
                        </h2>
                        <ul class="list-disc p-5">
                            <li>
                                <a href="{{ route('financeiro.conta-financeira-listar') }}" class="hover:text-sm">
                                    Plano de Contas
                                </a>
                            </li>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Centro de custos</a></li>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Estoque</a></li>
                            <li><a href="#" class="hover:text-sm hover:font-semibold">Relatórios</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
