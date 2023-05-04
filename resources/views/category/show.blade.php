<x-app-layout>
    <x-slot name="header">
        <div class="float-left py-2.5 px-5">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 bg-white">
                < Back to previous page
            </a>
        </div>

        <h2 class="py-2.5 px-5 bg-white font-semibold text-xl text-gray-800 leading-tight float-left">{{ __($category->name) }}</h2>

        <form method="POST" action="{{ route('category.destroy', ['id' => "$category->id" ]) }}" class="float-right ml-3">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="submit" class="cursor-pointer  py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200" value="Delete">
        </form>
        <a href="{{ route('category.edit', ['id' => "$category->id" ]) }}" class="float-right py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Edit</a>

        <div class="clear-both"></div>
    </x-slot>
        <div class="pb-1 pt-5" style="margin-left: 80px;">
            <livewire:category-detail-view :model="$category->id" />
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
</x-app-layout>
