<div>
    <x-slot name="header">
        <div class="flex items-center space-x-1 text-4xl text-blue-800">
            <i class="fa-solid fa-chart-bar"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Contabil') }}
            </span>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-between items-center bg-white p-4 rounded-t-lg shadow gap-4">
                <div class="input-find">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Buscar conta contábil..." />
                </div>
                <div class="flex items-center space-x-4">
                    <a 
                        href="{{ route('contabilidade.plano-contas-form') }}"
                        class="w-full sm:w-auto px-4 py-2 text-blue-500 hover:bg-blue-500 hover:text-white rounded-lg shadow focus:ring-2 focus:ring-teal-300 inline-flex items-center"
                    >
                        <i class="fa-solid fa-plus mr-2"></i> Cadastro
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto shadow-xl sm:rounded-lg mt-4">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-4 py-2 text-center">Código</th>
                            <th class="px-4 py-2 text-left">Classificação</th>
                            <th class="px-4 py-2 text-left">Descrição</th>
                            <th class="px-4 py-2 text-left">Analitica/Sitética</th>
                            <th class="px-4 py-2">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contas as $conta)
                        <tr class="hover:bg-blue-50 transition duration-200 
                            {{ $conta['tipo'] === 'A' ? 'bg-gray-50 text-gray-700' : 'bg-gray-200 font-semibold' }}"
                        >
                            <td class="px-4 py-2 text-center">{{ $conta['codigo_reduzido'] }}</td>
                            <td class="px-4 py-2">{{ $conta['classificacao'] }}</td>
                            <td class="px-4 py-2">{{ $conta['descricao'] }}</td>
                            <td class="px-4 py-2">{{ $conta['tipo'] === 'A' ? 'Analítica' : 'Sintética' }}</td>
                            <td class="px-6 py-2 text-sm text-center">
                                <a href="{{ route('contabilidade.plano-contas-form', $conta['id']) }}" 
                                    class="text-blue-600 hover:text-blue-800 p-2" title="Editar conta contábil"
                                >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 p-2" title="Deletar conta contábil">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination-links p-4">
                    {{ $contas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
