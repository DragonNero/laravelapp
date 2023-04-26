<x-app-layout>
    <x-slot name="header">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-5">{{ __($category->name) }}</h2>
    </x-slot>
        <div class="pb-1 pt-5" style="margin-left: 80px;">
            <livewire:category-detail-view :model="1" />
        </div>

            <div class="pt-0 pb-10 text-gray-900 text-xl">
                <p style="margin-left: 92px"; class="text-base text-black pt-1">
                    Image:
                    <td>
                        @if($category->image_path)
                        <img src="{{ asset('storage/images/'.$category->image_path) }}" style="max-width:550px; margin-left: 361px;">
                        @else 
                        <span>No image found!</span>
                        @endif
                    </td>
                </p>
            </div>
                {{-- <div class="pt-10 pb-10 text-gray-900 text-xl">
                    <p class="font-bold text-2xl text-black pt-10">
                        {{ $category->order }}
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
