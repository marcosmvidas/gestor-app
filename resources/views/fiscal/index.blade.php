<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-emerald-800">
            <i class="fa-solid fa-money-check-dollar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Fiscal') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-green-50">
                <div class="grid grid-cols-2 gap-1 p-6">
                    <!-- Lançamentos -->
                    <div class="h-auto p-6">
                        <h2 class="text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600">
                        <i class="fa fa-exchange" aria-hidden="true"></i>
                        Lançamentos
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">Notas de Entrada</a></li>
                            <li><a href="#" class="hover:text-blue-600">Notas de Saída</a></li>
                            <li><a href="#" class="hover:text-blue-600">Ajustes</a></li>
                        </ul>
                    </div>

                    <!-- Conferência -->
                    <div class="h-auto p-6">
                        <h2 class="text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600">
                            <i class="fa fa-file-pen" aria-hidden="true"></i>
                            Conferência
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">Validação de documentos</a></li>
                            <li><a href="#" class="hover:text-blue-600">Conciliação financeira</a></li>
                        </ul>
                    </div>

                    <!-- Apuração -->
                    <div class="h-auto p-6">
                        <h2 class="tooltip w-full text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600"
                            data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Apuração
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">Impostos / Tributos</a></li>
                        </ul>
                    </div>

                    <!-- Guias e Relatórios -->
                    <div class="h-auto p-6">
                        <h2 class="tooltip text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600"
                        data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            Guias e Relatórios
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">Emissão de guias de recolhimento</a></li>
                            <li><a href="#" class="hover:text-blue-600">SPED <span class="italic text-xs">/Fiscal/Contibuições/Contábil</span></a></li>
                            <li><a href="#" class="hover:text-blue-600">Livros Fiscais</a></li>
                        </ul>
                    </div>

                    <!-- Obrigações Acessórias -->
                    <div class="h-auto p-6">
                        <h2 class="text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600">
                        <i class="fa-solid fa-barcode" aria-hidden="true"></i>
                            Obrigações Acessórias
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">SPED</a></li>
                            <li><a href="#" class="hover:text-blue-600">DCTF <span class="italic text-xs">/WEB</span></a></li>
                            <li><a href="#" class="hover:text-blue-600">GIA</a></li>
                        </ul>
                    </div>

                    <!-- Fechamento -->
                    <div class="h-auto p-6">
                        <h2 class="text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        Fechamento
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">{{ __('Revisão Final') }}</a></li>
                            <li><a href="#" class="hover:text-blue-600">{{ __('Auditoria') }}</a></li>
                        </ul>
                    </div>

                    <!-- Configuração -->
                    <div class="h-auto p-6">
                        <h2 class="text-emerald-600 font-semibold text-2xl rounded-md border-b-2 border-emerald-600">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            Configuração
                        </h2>
                        <ul class="list-disc text-gray-600 p-5">
                            <li><a href="#" class="hover:text-blue-600">Parâmetros Fiscais</a></li>
                            <li><a href="#" class="hover:text-blue-600">Cadastro <span class="italic text-xs">/CFOP/CST/NCM</span></a></li>
                            <li><a href="#" class="hover:text-blue-600">Alíquotas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
