<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <h1><a href="/produit" style="font-size:1.8rem; font-weight:bold; display:flex; justify-content:center;">Revenir a la page du produit</a></h1>
            </div>
        </div>
    </div>
</x-app-layout>
