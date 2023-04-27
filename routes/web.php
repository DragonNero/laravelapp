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

Route::get('/', [CategoryController::class, 'home'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'verified', 'web']], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'categories', 'middleware' => ['auth', 'verified', 'web']], function () {
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('category.show');
        Route::post('/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::patch('/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
