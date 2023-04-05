<?php

use App\Http\Controllers\FallbackController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;

/*
    GET - request a resource
    POST - create a new resource
    PUT - update a resource
    PATCH - modify a resource
    DELETE - delete a resource
    OPTIONS - asks server which verbes are allowed

*/

//GET



//POST


//PUT OR PATCH

//DELETE

Route::prefix('/recipe')->group(function () {
    Route::get('/create', [PostsController::class, 'create'])->name('recipe.create');
    Route::get('/', [PostsController::class, 'index'])->name('recipe.index');
    Route::post('/{id}', [PostsController::class, 'show'])->name('recipe.show'); // this should be a get. Post means that you send data but when you want to show a receipe, you don,
    Route::post('/', [PostsController::class, 'store'])->name('recipe.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('recipe.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('recipe.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('recipe.destroy');
});


// Route::resource('blog', PostsController::class);

// Route for invoke methode
Route::get('/', HomeController::class);




// //Multiple HTTP verbes
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);


// //Return view

// Route::view('/blog', 'blog.index', ['name' => 'Code with me']);
//Fallback route
Route::fallback(FallbackController::class);
