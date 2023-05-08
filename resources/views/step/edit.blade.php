<x-app-layout>
    <x-slot name="header">
        <div class="float-left py-2.5 px-5">
            <a href="{{ URL::previous() }}"
               class="text-green-500 italic hover:text-green-400 hover:border-b-2 border-green-400 bg-white">
                < Back to previous page
            </a>
        </div>

        <h2 class="py-2.5 px-5 bg-white font-semibold text-xl text-gray-800 leading-tight float-left">{{ __($step->id) }}</h2>

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
                action="{{ route('step.update', $step->id) }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <ul>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Order
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                                type="number"
                                name="order"
                                value="{{ $step->order }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Recipe
                        </div>


                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <select name="recipe_id" class="">
                                @foreach ($recipes as $recipe)
                                    <option value="{{ $recipe->id }}" @if ($step->recipe_id == $recipe->id) selected @endif>{{ $recipe->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </li>
                    <li class=" px-4 py-5 border-b border-gray-200 sm:flex sm:items-center">
                        <div class="text-xs leading-4 font-semibold uppercase tracking-wider text-gray-900 sm:w-3/12">
                            Instruction
                        </div>
                        <div class="mt-1 text-sm leading-5 sm:mt-0 sm:w-9/12">
                            <input
                                type="text"
                                name="instruction"
                                value="{{ $step->instruction }}"
                                class="w-1/3 border-gray-300 hover:border-gray-500 px-2 py-1 rounded focus:border-blue-600 focus:border-2 border">
                        </div>
                    </li>
                </ul>

                <button
                    type="submit"
                    class="primary-btn mt-5 inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400">
                    Submit step
                </button>
            </form>
        </div>
    </div>
</x-app-layout>