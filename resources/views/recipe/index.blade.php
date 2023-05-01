<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Recipes') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white shadow-sm sm:rounded-lg px-6 pt-5">
                <div class="py-5">
                    <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                       href="{{ route('recipe.create') }}">
                        New Recipe
                    </a>
                </div>

                <div class="pb-5">
                    @livewire('recipes-table-view')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
