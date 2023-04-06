<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostsController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/recipe')->group(function () {
    Route::get('/create', [PostsController::class, 'create'])->name('recipe.create');
    Route::get('/', [PostsController::class, 'index'])->name('recipe.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('recipe.show');
    Route::post('/', [PostsController::class, 'store'])->name('recipe.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('recipe.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('recipe.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('recipe.destroy');
});

Route::resource('category', CategoryController::class);

require __DIR__ . '/auth.php';
