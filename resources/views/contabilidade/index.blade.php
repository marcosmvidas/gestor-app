<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-2 text-3xl text-gray-600">
            <i class="fa-solid fa-chart-bar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Contábil') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-gray-50">
                <div class="grid grid-cols-2 gap-1 p-6">
                    <div class="p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                            Lançamento
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-sm">Classificação</a></li>
                            <li><a href="#" class="hover:text-sm">Conciliação</a></li>
                            <li><a href="#" class="hover:text-sm">Validação</a></li>
                            <li><a href="#" class="hover:text-sm">Revisão</a></li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            Relatórios
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-sm">Balanço patrimonial</a></li>
                            <li><a href="#" class="hover:text-sm">Demonstração do resultado do exercício</a></li>
                            <li><a href="#" class="hover:text-sm">Demonstração das Mutações do Patrimônio Líquido</a></li>
                            <li><a href="#" class="hover:text-sm">Demonstração dos Fluxos de Caixa</a></li>
                            <li><a href="#" class="hover:text-sm">Demonstração do Valor Adicionado</a></li>
                            <li><a href="#" class="hover:text-sm">Livro Diário</a></li>
                            <li><a href="#" class="hover:text-sm">Livro Razão</a></li>
                            <li><a href="#" class="hover:text-sm">Notas Explicativas</a></li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <h2 class="text-gray-600 font-semibold text-2xl rounded-md border-b-2 border-gray-600">
                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                Plano de Contas
                        </h2>
                        <ul class="list-disc p-5">
                        <li>
                            <a href="{{ route('contabilidade.conta-contabil-listar') }}" class="hover:text-sm">
                                {{ __('Listar') }}
                            </a>
                        </li>
                        <li><a href="#" class="hover:text-sm">Imprimir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
