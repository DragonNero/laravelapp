<x-app-layout>
    <x-slot name="header">
        <div class="float-left py-2.5 px-5">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 bg-white">
                < Back to previous page
            </a>
        </div>
        <h2 class="py-2.5 px-5 bg-white font-semibold text-xl text-gray-800 leading-tight float-left">{{ __($recipeingredientunit->id) }}</h2>
        <button type="button" class="float-right py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Delete</button>
        <button type="button" class="float-right py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 mr-5">Edit</button>
        <div class="clear-both"></div>
    </x-slot>
        <div class="pb-1 pt-5" style="margin-left: 80px;">
            <livewire:recipeingredientunit-detail-view :model="$recipeingredientunit->id" />
        </div>
</x-app-layout>
