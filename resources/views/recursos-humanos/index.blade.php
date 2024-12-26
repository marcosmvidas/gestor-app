<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-orange-700">
            <i class="fa-solid fa-people-roof"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Recursos Humanos') }}
            </span>
        </div>
    </x-slot>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg bg-gradient-to-r from-orange-200">
                <div class="grid grid-cols-2 gap-1 p-6">
                    <div class="h-auto p-6">
                        <h2 class="text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700">
                        <i class="fa-solid fa-address-card" aria-hidden="true"></i>
                        Gestão de Pessoal
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-orange-600">Cadastro funcional</a></li>
                            <li><a href="#" class="hover:text-orange-600">Folha de pagamento</a></li>
                            <li><a href="#" class="hover:text-orange-600">Benefícios</a></li>
                            <li><a href="#" class="hover:text-orange-600">Documentação</a></li>
                        </ul>
                    </div>

                    <div class="h-auto p-6">
                        <h2 class="text-orange-700 font-semibold text-2xl rounded-md border-b-2 border-orange-700">
                            <i class="fa-solid fa-arrows-down-to-people" aria-hidden="true"></i>
                            Recrutamento
                        </h2>
                        <ul class="list-disc p-5">
                            <li><a href="#" class="hover:text-orange-600">Processo seletivo</a></li>
                            <li><a href="#" class="hover:text-orange-600">Admissão</a></li>
                            <li><a href="#" class="hover:text-orange-600">Eventos</a></li>
                            <li><a href="#" class="hover:text-orange-600">Onboarding</a></li>
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
                        <li><a href="#" class="hover:text-orange-600">Lista</a></li>
                        <li><a href="#" class="hover:text-orange-600">Avaliação de desempenho</a></li>
                        <li><a href="#" class="hover:text-orange-600">Capacitação contínua</a></li>
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
                            <li><a href="#" class="hover:text-orange-600">Programas</a></li>
                            <li><a href="#" class="hover:text-orange-600">Treinamentos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
