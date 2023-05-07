<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            Add new recipe
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
        action="{{ route('recipe.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <label for="category_id" class="text-gray-500 text-2xl">
            Category_id
        </label>

        <select name="category_id" class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">
            <option value=""></option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="name" class="text-gray-500 text-2xl">
            Name of recipe
        </label>
        <input
            type="text"
            name="name"
            placeholder="Name..."
            class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <div class="bg-grey-lighter py-10">
            <label for="prep_time" class="text-gray-500 text-2xl">
                Image for recipe
            </label>
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
        <label for="prep_time" class="text-gray-500 text-2xl">
            prep_time of recipe
        </label>
        <input
        type="integer"
        name="prep_time"
        placeholder="..."
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <label for="cook_time" class="text-gray-500 text-2xl">
            cook_time of recipe
        </label>
        <input
        type="integer"
        name="cook_time"
        placeholder="..."
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <label for="rest_time" class="text-gray-500 text-2xl">
            rest_time of recipe
        </label>
        <input
        type="integer"
        name="rest_time"
        placeholder="..."
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <label for="servings" class="text-gray-500 text-2xl">
            servings
        </label>
        <input
        type="integer"
        name="servings"
        placeholder="..."
        class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

        <button
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Recipe
        </button>
    </form>
</div>
</body>
</html>
