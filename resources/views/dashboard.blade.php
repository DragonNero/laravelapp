<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div class="py-10 sm:py-20">
                    <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                       href="{{ route('category.index') }}">
                        All Categories
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
