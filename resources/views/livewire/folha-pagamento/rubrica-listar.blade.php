<div>

    <x-slot name="header">
        <div class="flex items-center space-x-2 text-2xl text-gray-600">
            <i class="fa-solid fa-people-roof"></i>
            <span class="font-semibold leading-tight">
                {{ __('Depto Recursos Humanos') }}
            </span>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-between items-center bg-white p-4 rounded-t-lg shadow gap-4">
                <div class="input-find">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Buscar rubrica..." />
                </div>
                <div class="flex items-center space-x-4">
                    <a
                        href="{{ route('folha-pagamento.rubrica-form') }}"
                        class="w-full sm:w-auto px-4 py-2 text-green-500 hover:bg-green-500 hover:text-white rounded-lg shadow focus:ring-2 focus:ring-teal-300 inline-flex items-center"

                        >
                        <i class="fa-solid fa-plus mr-2"></i> Cadastro
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto shadow-xl sm:rounded-lg mt-4">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-400 text-white">
                        <tr>
                        <th class="px-4 py-2">Rubrica</th>
                        <th class="px-4 py-2 text-left">Descrição</th>
                        <th class="px-4 py-2 text-left"></th>
                            <th class="px-4 py-2">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rubricas as $item)
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="px-4 py-2 text-center">{{ $item['codigo'] }}</td>
                            <td class="px-4 py-2">{{ $item['descricao'] }}</td>
                            <td class="px-4 py-2">{{ $item['tipo'] }}</td>
                            <td class="px-6 py-2 text-sm text-center">
                                <a href="{{ route('folha-pagamento.rubrica-form', $item['id']) }}"
                                    class="text-blue-600 hover:text-xs p-2" title="Editar rubrica"
                                >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="#" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-xs p-2" title="Deletar rubrica">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="pagination-links p-4">
                    {{ $rubricas->links() }}
                </div>


        </div>
    </div>
</div>
