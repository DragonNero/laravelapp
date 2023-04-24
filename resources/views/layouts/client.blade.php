<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dravinka</title>

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
                    <x-application-logo />
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

    {{ $slot }}

    <footer class="py-12 text-center">
        © {{ date('Y') }} Ekaterina Gloaguen. All rights reserved.
    </footer>
</body>
</html>