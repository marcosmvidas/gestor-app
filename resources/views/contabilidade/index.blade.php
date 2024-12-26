<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-blue-800">
            <i class="fa-solid fa-chart-bar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Contábil') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-blue-100">
                <div class="grid grid-cols-2 gap-1 p-6">
                    <div class="p-6">
                        <h2 class="text-blue-700 font-semibold text-2xl rounded-md border-b-2 border-blue-700 ">
                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                            Lançamento
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-blue-600">Classificação</a></li>
                            <li><a href="#" class="hover:text-blue-600">Conciliação</a></li>
                            <li><a href="#" class="hover:text-blue-600">Validação</a></li>
                            <li><a href="#" class="hover:text-blue-600">Revisão</a></li>
                        </ul>
                    </div>

                    <div class="p-6">
                    <h2 class="text-blue-700 font-semibold text-2xl rounded-md border-b-2 border-blue-700 ">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            Relatórios
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-blue-600">Balanço patrimonial</a></li>
                            <li><a href="#" class="hover:text-blue-600">Demonstração do resultado do exercício</a></li>
                            <li><a href="#" class="hover:text-blue-600">Demonstração das Mutações do Patrimônio Líquido</a></li>
                            <li><a href="#" class="hover:text-blue-600">Demonstração dos Fluxos de Caixa</a></li>
                            <li><a href="#" class="hover:text-blue-600">Demonstração do Valor Adicionado</a></li>
                            <li><a href="#" class="hover:text-blue-600">Livro Diário</a></li>
                            <li><a href="#" class="hover:text-blue-600">Livro Razão</a></li>
                            <li><a href="#" class="hover:text-blue-600">Notas Explicativas</a></li>
                        </ul>
                    </div>

                    <div class="p-6">
                        <h2 class="text-blue-700 font-semibold text-2xl rounded-md border-b-2 border-blue-700 ">
                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                Plano de Contas
                        </h2>
                        <ul class="list-disc p-5">
                        <li>
                            <a href="{{ route('contabilidade.conta-contabil-listar') }}" class="hover:text-blue-600">
                                {{ __('Listar') }}
                            </a>
                        </li>
                        <li><a href="#" class="hover:text-blue-600">Imprimir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
