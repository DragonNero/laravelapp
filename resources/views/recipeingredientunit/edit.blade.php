<x-app-layout>
    <x-slot name="header">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-5">{{ __($recipeingredientunit->id) }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white shadow-sm sm:rounded-lg px-6"><div class="w-4/5 mx-auto">
                <div class="text-center pt-20">
                    <h1 class="text-3xl text-gray-700">
                        recipeingredientunit recipe id: {{ $recipeingredientunit->id }}
                    </h1>
                    <hr class="border border-1 border-gray-300 mt-10">
                </div>

            <div class="m-auto pt-20">
                <div class="pb-8">
                    @if ($errors->any())
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            Something went wrong...
                        </div>
                        <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            @foreach ($errors->all() as $error )
                                <li>
                                {{ $error }}
                                </li>

                            @endforeach
                        </ul>

                    @endif
                </div>
                    <form
                        action="{{ route('recipeingredientunit.update', $recipeingredientunit->id) }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <input
                            type="integer"
                            name="recipe_id"
                            value="{{ $recipeingredientunit->recipe_id }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
                            <input
                            type="integer"
                            name="unit_id"
                            value="{{ $recipeingredientunit->unit_id }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
                            <input
                            type="integer"
                            name="ingredient_id"
                            value="{{ $recipeingredientunit->ingredient_id }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
                            <input
                            type="integer"
                            name="value"
                            value="{{ $recipeingredientunit->value }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                        <button
                            type="submit"
                            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                            Submit recipeingredientunit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>