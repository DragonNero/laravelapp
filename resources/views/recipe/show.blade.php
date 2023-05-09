<x-app-layout>
    <x-slot name="header">
        <div class="float-left py-2.5 px-5">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 bg-white">
                < Back to previous page
            </a>
        </div>

        <h2 class="py-2.5 px-5 bg-white font-semibold text-xl text-gray-800 leading-tight float-left">{{ __($recipe->name) }}</h2>

        <form method="POST" action="{{ route('recipe.destroy', ['id' => $recipe->id ]) }}" class="float-right ml-3">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="submit" class="cursor-pointer  py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200" value="Delete">
        </form>
        <a href="{{ route('recipe.edit', ['id' => $recipe->id ]) }}" class="float-right py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Edit</a>

        <div class="clear-both"></div>
    </x-slot>
        <div class="py-12 max-w-7xl mx-auto">
            <div class="bg-white shadow-sm sm:rounded-lg py-6 px-32">
                <livewire:recipe-detail-view :model="$recipe->id" />
            </div>
        </div>
</x-app-layout>
