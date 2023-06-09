<x-client-layout>
    @vite(['resources/js/recipe.js'])
    <div class="w-full lg:px-40 mt-5">
        <h1 class="text-center text-5xl">{{ $recipe->name }}</h1>

        <div class="w-full mt-5 mb-4">
            <div class="w-full text-center text-xl float-left mb-3">
                Total Time {{ $recipe->total_time }}
            </div>
            <div class="md:w-3/12 md:text-left text-center w-full float-left leading-10">
                Prep Time {{ $recipe->prep_time }}
            </div>
            <div class="md:w-3/12 md:text-left text-center w-full float-left leading-10">
                Cook Time {{ $recipe->cook_time }}
            </div>
            <div class="md:w-3/12 md:text-left text-center w-full float-left leading-10">
                Rest Time {{ $recipe->rest_time }}
            </div>
            <div class="md:w-3/12 md:text-left text-center w-full float-left">
                Serves <input
                    id="servings"
                    class="border-gray-300 hover:border-gray-500 rounded focus:border-blue-600 focus:border-2 border"
                    type="number"
                    min="1"
                    value="{{ $recipe->servings }}"
                    data-value="{{ $recipe->servings }}"
                >
            </div>

            <div class="clear-both"></div>
        </div>

        <img src="{{ asset('storage/images/'.$recipe->image_path) }}" class="rounded w-full" style="height: 400px; object-fit: cover;">

        <div class="md:w-4/12 w-full float-left mt-10 pl-5">
            <h1 class="text-center text-2xl mb-2 w-full">Ingredients</h1>
            @foreach ($recipe->recipeIngredientUnits as $ingredientUnit)
                <div class="w-full">
                    <span class="ingredientValue" data-value="{{ $ingredientUnit->value }}">{{ $ingredientUnit->value }}</span>
                    {{ $ingredientUnit->unit->name ?? '' }}
                    {{ $ingredientUnit->ingredient->name }}
                </div>
            @endforeach
        </div>
        <div class="md:w-8/12 w-full float-left mt-10 pl-8">
            <h1 class="text-center text-2xl mb-5 w-full">Instructions</h1>
            <ol class="list-decimal">
                @foreach ($recipe->steps as $steps)
                    <li class="">{{ $steps->instruction }}</li>
                @endforeach
            </ol>
        </div>

        <div class="clear-both"></div>
    </div>
</x-client-layout>