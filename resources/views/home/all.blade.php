<x-client-layout>
    <div class="w-full mt-7">
        <h1 class="w-full text-center text-5xl font-thin">
            All Recipes
        </h1>
    </div>

    <div class="w-full mt-10">
        @foreach ($recipes as $recipe)
            <div class="lg:w-4/12 md:w-6/12 w-full float-left relative group" style="background-image: url('{{ asset('storage/images/'.$recipe->image_path) }}');
            height: 400px;
            background-position: center;
            background-size: cover;">
                <a href="{{ route('home.recipe', ['id' => $recipe->id]) }}" class="block bg-black/[.5] w-full h-full text-center text-white pt-48 text-2xl">
                    {{ $recipe->name }}
                </a>
            </div>
        @endforeach
    </div>

    <div class="clear-both"></div>
</x-client-layout>