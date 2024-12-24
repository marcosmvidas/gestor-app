<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center space-x-4 text-4xl text-emerald-800">
            <i class="fas fa-display"></i>
            <h2 class="font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>

</x-app-layout>