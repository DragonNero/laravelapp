<x-client-layout>
    <div class="w-full px-40">
        <h1 class="text-center text-5xl">{{ $recipe->name }}</h1>

        <div class="w-full">
            <div class="w-3/12 float-left">
                Prep Time {{ $recipe->prep_time }}
            </div>
            <div class="w-3/12 float-left">
                Cook Time {{ $recipe->cook_time }}
            </div>
            <div class="w-3/12 float-left">
                Rest Time {{ $recipe->rest_time }}
            </div>
            <div class="w-3/12 float-left">
                Serves {{ $recipe->servings }}
            </div>
        </div>

        <div class="clear-both"></div>

        <img src="{{ asset('storage/images/'.$recipe->image_path) }}" class="rounded w-full" style="height: 400px; object-fit: cover;">

        <div class="w-4/12 float-left">
            <h1 class="text-center text-2xl">Ingredients</h1>
            @foreach ($recipe->recipeIngredientUnits as $ingredientUnit)
                <div class="w-2/12 float-left">{{ $ingredientUnit->value }}</div>
                <div class="w-4/12 float-left">{{ $ingredientUnit->unit->name }}</div>
                <div class="w-5/12 float-left">{{ $ingredientUnit->ingredient->name }}</div>
            @endforeach
        </div>
        <div class="w-8/12 float-left">
            <h1 class="text-center text-2xl">Instructions</h1>
            <ol class="list-decimal">
                @foreach ($recipe->steps as $steps)
                    <li class="">{{ $steps->instruction }}</li>
                @endforeach
            </ol>
        </div>

        <div class="clear-both"></div>
    </div>
</x-client-layout>