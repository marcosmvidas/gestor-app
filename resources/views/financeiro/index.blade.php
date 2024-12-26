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
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-gray-200">
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
                            <i class="fa-brands fa-shopify" aria-hidden="true"></i>
                            Despesa
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
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Apuração
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">Impostos / Tributos</a></li>
                        </ul>
                    </div>

                    <!-- Guias e Relatórios -->
                    <div class="h-auto p-6">
                        <h2 class="tooltip text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600"
                        data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            Guias e Relatórios
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">Emissão de guias de recolhimento</a></li>
                            <li><a href="#" class="hover:text-gray-400">SPED <span class="italic text-xs">/Fiscal/Contibuições/Contábil</span></a></li>
                            <li><a href="#" class="hover:text-gray-400">Livros Fiscais</a></li>
                        </ul>
                    </div>

                    <!-- Obrigações Acessórias -->
                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                        <i class="fa-solid fa-barcode" aria-hidden="true"></i>
                            Obrigações Acessórias
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">SPED</a></li>
                            <li><a href="#" class="hover:text-gray-400">DCTF <span class="italic text-xs">/WEB</span></a></li>
                            <li><a href="#" class="hover:text-gray-400">GIA</a></li>
                        </ul>
                    </div>

                    <!-- Fechamento -->
                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        Fechamento
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-gray-400">{{ __('Revisão Final') }}</a></li>
                            <li><a href="#" class="hover:text-gray-400">{{ __('Auditoria') }}</a></li>
                        </ul>
                    </div>

                    <!-- Configuração -->
                    <div class="h-auto p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            Configuração
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-gray-400">Parâmetros Fiscais</a></li>
                            <li><a href="#" class="hover:text-gray-400">Cadastro <span class="italic text-xs">/CFOP/CST/NCM</span></a></li>
                            <li><a href="#" class="hover:text-gray-400">Alíquotas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
