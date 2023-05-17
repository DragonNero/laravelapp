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
        <!-- header/navigation -->
        <div x-data="{ isOpen: false }" class="flex justify-between p-4 bg-white lg:p-8">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <x-application-logo />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Dravinka</span>
                </a>
            </div>

            <!-- left header section -->
            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-black lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="hidden space-x-6 lg:inline-block">
                    <a href="{{ route('home') }}" class="text-base text-black ">HOME</a>
                    @foreach ($categories as $category)
                        <a href="{{ route('home.categoryrecipe', ['name' => $category->name]) }}" class="text-base text-black">{{ $category->name }}</a>
                    @endforeach
                </div>

                <!-- mobile navbar -->
                <div class="mobile-navbar" x-cloak>
                    <!-- navbar wrapper -->
                    <div id="mobileNav" class="absolute z-20 left-0 w-full p-5 bg-white rounded-lg shadow-xl top-14" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col space-y-6">
                            <a href="{{ route('home') }}" class="text-base text-black ">HOME</a>
                            @foreach ($categories as $category)
                                <a href="{{ route('home.categoryrecipe', ['name' => $category->name]) }}" class="text-base text-black">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- end mobile navbar -->
            </div>
            <!-- right header section -->

        </div>
    </header>

    {{ $slot }}

    <footer class="py-12 text-center">
        © {{ date('Y') }} Ekaterina Gloaguen. All rights reserved.
    </footer>
</body>
</html>