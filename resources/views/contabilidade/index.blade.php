<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-1 text-4xl text-teal-400 text-shadow-sm">
            <i class="fa-solid fa-chart-bar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Contabilidade') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-2 gap-1 p-6">
                    <div class="h-80 p-6">
                        <h2 class="text-gray-500 font-semibold text-2xl">
                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                            Lançamento Contábil
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">Classificação</a></li>
                            <li><a href="#" class="hover:text-blue-600">Conciliação</a></li>
                            <li><a href="#" class="hover:text-blue-600">Validação</a></li>
                            <li><a href="#" class="hover:text-blue-600">Revisão</a></li>
                        </ul>
                    </div>

                    <div class="h-80 p-6">
                        <h2 class="text-gray-500 font-semibold text-2xl">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            Relatórios Contábil
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
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

                    <div class="h-80 p-6">
                        <h2 class="text-gray-500 font-semibold text-2xl">
                            <i class="fa fa-align-left" aria-hidden="true"></i>
                            Plano de Conta Contábil
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
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
