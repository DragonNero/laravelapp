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

Route::prefix('/blog')->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::post('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
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
