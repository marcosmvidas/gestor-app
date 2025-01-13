<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-2 text-2xl">
            <i class="fa-solid fa-people-roof"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Recursos Humanos') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-gray-100">
                <div class="grid grid-cols-2 gap-1 p-6">
                    <div class="h-auto p-6">
                        <h2 class="text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700">
                        <i class="fa-solid fa-address-card" aria-hidden="true"></i>
                        Gestão de Pessoal
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Cadastro funcional</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Folha de pagamento</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Benefícios</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Documentação</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700">
                            <i class="fa-solid fa-arrows-down-to-people" aria-hidden="true"></i>
                            Recrutamento
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Processo seletivo</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Admissão</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Eventos</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Onboarding</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="tooltip w-full text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700"
                            data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                        <i class="fa-solid fa-chalkboard-user" aria-hidden="true"></i>
                            Treinamento
                        </h2>
                        <ul class="list-disc p-5">
                        <li><a href="#" class="hover:font-semibold hover:text-sm">Lista</a></li>
                        <li><a href="#" class="hover:font-semibold hover:text-sm">Avaliação de desempenho</a></li>
                        <li><a href="#" class="hover:font-semibold hover:text-sm">Capacitação contínua</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="tooltip text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700"
                        data-title="Apure os impostos e tributos baseados nas movimentações fiscais da sua empresa."
                        >
                            <i class="fa-solid fa-users-viewfinder" aria-hidden="true"></i>
                            Segurança e Saúde no Trabalho
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Programas</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Treinamentos</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700">
                        <i class="fa-solid fa-user-slash" aria-hidden="true"></i>
                            Rescisão Contratual
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Cálculo</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">TRCT <span class="text-xs">/Termo de Rescisão do Contrato de Trabalho</span></a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Homologação</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Encaminhamento</a></li>
                            <li><a href="#" class="hover:font-semibold hover:text-sm">Relatórios</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700">
                        <i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i>
                            Folha de pagamento
                        </h2>
                        <ul class="list-disc p-5">
                        <li><a href="#" class="hover:font-semibold hover:text-sm">Lançamento</a></li>
                        <li><a href="#" class="hover:font-semibold hover:text-sm">Conferência</a></li>
                        <li><a href="#" class="hover:font-semibold hover:text-sm">Fechamento</a></li>
                        <li><a href="{{ route('folha-pagamento.rubrica-listar') }}"  class="hover:font-semibold hover:text-sm">Rubricas</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
