<x-client-layout>
    <div class="w-full relative" style="background-image: url('{{ asset('storage/images/myimage.jpg') }}');
        height: 600px;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;">
        <div class="w-full bg-gray-300/[.4] py-24 bottom-0 absolute">
            <div class="text-center max-w-2xl mx-auto">
                <h1 class="text-6xl font-thin">DRAVINKA'S RECIPES</h1>
                <h2 class="text-2xl font-thin">Truly Gourmet </h2>
            </div>
        </div>
    </div>

    <div class="w-full mt-10">
        @foreach ($categories as $category)
        <div class="w-6/12 float-left relative group" style="background-image: url('{{ asset('storage/images/'.$category->image_path) }}');
        height: 400px;
        background-position: center;
        background-size: cover;">
            <a href="{{ route('home.categoryrecipe', ['name' => $category->name]) }}" class="hidden group-hover:block bg-black/[.5] w-full h-full text-center text-white pt-48 text-2xl">
                {{ $category->name }}
            </a>
        </div>
        @endforeach
    </div>

    <div class="clear-both"></div>
</x-client-layout>