<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-gray-600">
        <i class="fa-solid fa-circle-dollar-to-slot" aria-hidden="true"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Financeiro') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-gray-100">
                <div class="grid grid-cols-2 gap-1 p-6">
                <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa-solid fa-hand-holding-dollar" aria-hidden="true"></i>
                            Receita
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">Cliente</a></li>
                            <li><a href="#" class="hover:text-gray-400">Pedido</a></li>
                            <li><a href="#" class="hover:text-gray-400">Contas a receber</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                        <i class="fa-solid fa-money-bill-1-wave" aria-hidden="true"></i>
                            Despesa
                        </h2>
                        <ul class="list-disc p-5">
                        <li><a href="#" class="hover:text-gray-400">Listar</a></li>
                        <li><a href="#" class="hover:text-gray-400">Imprimir</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa-brands fa-shopify" aria-hidden="true"></i>
                            Compras 
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">Fornecedor</a></li>
                            <li><a href="#" class="hover:text-gray-400">Orçamento</a></li>
                            <li><a href="#" class="hover:text-gray-400">Contas a pagar</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="tooltip w-full text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600"
                            data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa-solid fa-money-bill-transfer" aria-hidden="true"></i>
                            Movimentação
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">Conciliação</a></li>
                            <li><a href="#" class="hover:text-gray-400">Baixa <span class="text-xs">/Receita/Despesa</span></a></li></a></li>
                            <li><a href="#" class="hover:text-gray-400">Liquidação de títulos</a></li></a></li>
                            <li><a href="#" class="hover:text-gray-400">Transferências</a></li>
                            <li><a href="#" class="hover:text-gray-400">Relatórios</a></li>
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
                            <li><a href="#" class="hover:text-gray-400">Centro de custos</a></li>
                            <li><a href="#" class="hover:text-gray-400">Estoque</a></li>
                            <li><a href="#" class="hover:text-gray-400">Relatórios</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
