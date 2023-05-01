<x-app-layout>
    <x-slot name="header">
        <div class="pt-10">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 pb-3 transition-all py-20">
                < Back to previous page
            </a>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-5">{{ __($recipe->name) }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white shadow-sm sm:rounded-lg px-6"><div class="w-4/5 mx-auto">
                <div class="text-center pt-20">
                    <h1 class="text-3xl text-gray-700">
                        Recipe name: {{ $recipe->name }}
                    </h1>
                    <hr class="border border-1 border-gray-300 mt-10">
                </div>

            <div class="m-auto pt-20">
                <div class="pb-8">
                    @if ($errors->any())
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            Something went wrong...
                        </div>
                        <ul class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            @foreach ($errors->all() as $error )
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

                        <input
                            type="text"
                            name="category_id"
                            value="{{ $recipe->category_id }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                        <input
                            type="text"
                            name="name"
                            value="{{ $recipe->name }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">


                            <div class="bg-grey-lighter py-10">
                                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                                        <span class="mt-2 text-base leading-normal">
                                            Select a file
                                        </span>
                                    <input
                                        type="file"
                                        name="image_path"
                                        class="hidden">
                                </label>
                            </div>
                            <div class="pt-0 pb-10 text-gray-900 text-xl">
                                <p class="text-base text-black pt-1">
                                    Current image:
                                    <td>
                                        @if($recipe->image_path)
                                        <img src="{{ asset('storage/images/'.$recipe->image_path) }}" style="max-width:550px; margin-left: 150px;">
                                        @else
                                        <span>No image found!</span>
                                        @endif
                                    </td>
                                </p>
                            </div>

                        <input
                            type="number"
                            name="prep_time"
                            value="{{ $recipe->prep_time }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                        <input
                            type="number"
                            name="cook_time"
                            value="{{ $recipe->cook_time }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                        <input
                            type="number"
                            name="rest_time"
                            value="{{ $recipe->rest_time }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                        <input
                            type="number"
                            name="servings"
                            value="{{ $recipe->servings }}"
                            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                        <button
                            type="submit"
                            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                            Submit recipe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>