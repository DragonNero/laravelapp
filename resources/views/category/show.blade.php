<x-app-layout>
    <x-slot name="header">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __($category->name) }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white shadow-sm sm:rounded-lg px-6">
                <div class="block lg:flex flex-row">
                    <div class="basis-9/12 text-center sm:block sm:text-left">
                        <span class="text-left sm:text-center sm:text-left sm:inline block text-gray-900 pb-10 sm:pt-0 pt-0 sm:pt-10 pl-0 sm:pl-4 -mt-8 sm:-mt-0">
                            Made by:
                            <a
                                href=""
                                class="font-bold text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                                Katerina Gloaguen
                            </a>
                            On 19-04-2023
                        </span>
                    </div>
                </div>
        
                <div class="pt-10 pb-10 text-gray-900 text-xl">
                    <p class="text-base text-black pt-10">
                        <td>
                            @if($category->image_path)
                            <img src="{{ asset('storage/images/'.$category->image_path) }}" style="height: 200px;width:200px;">
                            @else 
                            <span>No image found!</span>
                            @endif
                        </td>
                    </p>
                </div>
                <div class="pt-10 pb-10 text-gray-900 text-xl">
                    <p class="font-bold text-2xl text-black pt-10">
                        {{ $category->order }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
