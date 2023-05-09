<x-app-layout>
    <x-slot name="header">
        <div class="float-left py-2.5 px-5">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 bg-white">
                < Back to previous page
            </a>
        </div>

        <h2 class="py-2.5 px-5 bg-white font-semibold text-xl text-gray-800 leading-tight float-left">{{ __($recipe->name) }}</h2>

        <div class="clear-both"></div>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto">
        <div class="bg-white shadow-sm sm:rounded-lg py-6 px-32">
            <div class="pb-5">
                @if ($errors->any())
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        Something went wrong...
                    </div>
                    <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        @foreach ($errors->all() as $error)
                            <li>
                            {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <form
                action="{{ route('recipe.update', $recipe->id) }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <ul>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Category
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <select name="category_id" class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($recipe->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Recipe name
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                                type="text"
                                name="name"
                                value="{{ $recipe->name }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Select a new Image
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg rounded shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                                <span class="mt-2 items-center text-base leading-normal">
                                    Select a file
                                </span>
                                <input
                                    type="file"
                                    name="image_path"
                                    class="hidden">
                            </label>
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Current Image
                        </div>

                        <div class="mt-5">
                            @if ($recipe->image_path)
                                <img src="{{ asset('storage/images/'.$recipe->image_path) }}" style="max-width:550px;" class="rounded">
                            @else
                                <span>No image found!</span>
                            @endif
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Preparation time
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                                type="number"
                                name="prep_time"
                                value="{{ $recipe->prep_time }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Cook time
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                            type="number"
                            name="cook_time"
                            value="{{ $recipe->cook_time }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Rest time
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                                type="number"
                                name="rest_time"
                                value="{{ $recipe->rest_time }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Servings
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                                type="number"
                                name="servings"
                                value="{{ $recipe->servings }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                </ul>

                <button
                    type="submit"
                    class="primary-btn mt-5 inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400">
                    Submit recipe
                </button>
            </form>
        </div>
    </div>
</x-app-layout>



