<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dravinka Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="bg-white px-12 py-12">
            <div class="flex flex-wrap justify-between items-center max-w-screen-xl">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('storage/images/logo.jpeg') }}" class="h-8 mr-3" alt="Dravinka Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Dravinka</span>
                </a>
            </div>
        </nav>
        <nav class="bg-gray-200">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                        <li class="px-4 py-3 hover:bg-gray-300">
                            <a href="{{ route('home') }}" class="">HOME</a>
                        </li>
                        @foreach ($categories as $category)
                        <li class="px-4 py-3 hover:bg-gray-300">
                            <a href="{{ route('home') /* TODO */ }}" class="text-gray-900">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="w-full relative" style="background-image: url('{{ asset('storage/images/myimage.jpg') }}');
        height: 600px;
        background-position: center;
        background-size: cover;">
        <div class="w-full bg-gray-300/[.4] py-9 bottom-0 absolute">
            <div class="text-center max-w-2xl mx-auto">
                <h1 class="text-6xl font-medium">DRAVINKA'S RECIPES</h1>
                <h2 class="text-2xl font-medium">Truly Gourmet </h2>
            </div>
        </div>
    </div>

    <div class="w-full mt-10">
        @foreach ($categories as $category)
        <div class="w-6/12 float-left relative group" style="background-image: url('{{ asset('storage/images/'.$category->image_path) }}');
        height: 400px;
        background-position: center;
        background-size: cover;">
            <a href="{{ route('home') /* TODO */ }}" class="hidden group-hover:block bg-black/[.5] w-full h-full text-center text-white pt-48 text-2xl">
                {{ $category->name }}
            </a>
        </div>
        @endforeach
    </div>

    <div class="clear-both"></div>

    <footer class="py-12 text-center">
        © {{ date('Y') }} Ekaterina Gloaguen. All rights reserved.
    </footer>
</body>
</html>