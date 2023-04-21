<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dravinka Home</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="header-2">
            <nav class="bg-white py-2 md:py-4">
              <div class="container px-4 mx-auto md:flex md:items-center">
          
                <div class="flex justify-between items-center">
                  <a href="#" class="font-bold text-xl text-indigo-600">Dravinka</a>
                </div>
          
                <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-indigo-600">Home</a>
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Appetizers</a>
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Main Dishes</a>
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Side Dishes</a>
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Desserts</a>
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Cocktails</a>
                  <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-600 rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Others</a>
                </div>
              </div>
            </nav>
          
            <div class="bg-indigo-100 py-6 md:py-12">
              <div class="container px-4 mx-auto">
          
                <div class="text-center max-w-2xl mx-auto">
                  <h1 class="text-3xl md:text-4xl font-medium mb-2">DRAVINKA'S RECIPES</h1>
                  <h2 class="text-3xl md:text-4xl font-medium mb-2">Truly Gourmet </h2>
                  <div class="mt-4">
                    <img src="{{ asset('storage/images/myimage.jpg') }}" alt="description of myimage" class="d-block max-w-full rounded shadow-md" style="height: 700px;width:100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
    </header>
</body>
</html>