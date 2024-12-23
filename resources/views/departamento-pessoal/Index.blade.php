<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-indigo-300">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            <h2 class="font-semibold leading-tight">
                {{ __('Departamento de pessoal') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-3">
        <div class="p-4 bg-gray-100 rounded-lg shadow-md">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex justify-end space-x-4 p-2 text-sm text-gray-700" x-data="{ activeTab: 'colaboradores' }">
                        <!-- Links de navegação -->
                        <x-nav-link href="{{ route('departamento-pessoal.rubrica') }}" 
                            class="hover:text-blue-600 flex items-center space-x-1">
                            <span>{{ __('Rubrica') }}</span>
                            <i class="fa fa-list-ul text-gray-500"></i>
                        </x-nav-link>
                    </div>

                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
