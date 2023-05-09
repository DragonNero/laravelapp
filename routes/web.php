<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeIngredientUnitController;

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


Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/all', [HomeController::class, 'all'])->name('home.all');
    Route::get('/categoryrecipe/{name}', [HomeController::class, 'categoryrecipe'])->name('home.categoryrecipe');
    Route::get('/recipe/{id}', [HomeController::class, 'recipe'])->name('home.recipe');
});

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

    Route::group(['prefix' => 'recipes', 'middleware' => ['auth', 'verified', 'web']], function () {
        Route::get('/create', [RecipeController::class, 'create'])->name('recipe.create');
        Route::get('/', [RecipeController::class, 'index'])->name('recipe.index');
        Route::get('/{id}', [RecipeController::class, 'show'])->name('recipe.show');
        Route::post('/', [RecipeController::class, 'store'])->name('recipe.store');
        Route::get('/edit/{id}', [RecipeController::class, 'edit'])->name('recipe.edit');
        Route::patch('/{id}', [RecipeController::class, 'update'])->name('recipe.update');
        Route::delete('/{id}', [RecipeController::class, 'destroy'])->name('recipe.destroy');
    });

    Route::group(['prefix' => 'units', 'middleware' => ['auth', 'verified', 'web']], function () {
        Route::get('/create', [UnitController::class, 'create'])->name('unit.create');
        Route::get('/', [UnitController::class, 'index'])->name('unit.index');
        Route::get('/{id}', [UnitController::class, 'show'])->name('unit.show');
        Route::post('/', [UnitController::class, 'store'])->name('unit.store');
        Route::get('/edit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
        Route::patch('/{id}', [UnitController::class, 'update'])->name('unit.update');
        Route::delete('/{id}', [UnitController::class, 'destroy'])->name('unit.destroy');
    });

    Route::group(['prefix' => 'ingredients', 'middleware' => ['auth', 'verified', 'web']], function () {
        Route::get('/create', [IngredientController::class, 'create'])->name('ingredient.create');
        Route::get('/', [IngredientController::class, 'index'])->name('ingredient.index');
        Route::get('/{id}', [IngredientController::class, 'show'])->name('ingredient.show');
        Route::post('/', [IngredientController::class, 'store'])->name('ingredient.store');
        Route::get('/edit/{id}', [IngredientController::class, 'edit'])->name('ingredient.edit');
        Route::patch('/{id}', [IngredientController::class, 'update'])->name('ingredient.update');
        Route::delete('/{id}', [IngredientController::class, 'destroy'])->name('ingredient.destroy');
    });

    Route::group(['prefix' => 'recipeingredientunit', 'middleware' => ['auth', 'verified', 'web']], function () {
        Route::get('/create', [RecipeIngredientUnitController::class, 'create'])->name('recipeingredientunit.create');
        Route::get('/', [RecipeIngredientUnitController::class, 'index'])->name('recipeingredientunit.index');
        Route::get('/{id}', [RecipeIngredientUnitController::class, 'show'])->name('recipeingredientunit.show');
        Route::post('/', [RecipeIngredientUnitController::class, 'store'])->name('recipeingredientunit.store');
        Route::get('/edit/{id}', [RecipeIngredientUnitController::class, 'edit'])->name('recipeingredientunit.edit');
        Route::patch('/{id}', [RecipeIngredientUnitController::class, 'update'])->name('recipeingredientunit.update');
        Route::delete('/{id}', [RecipeIngredientUnitController::class, 'destroy'])->name('recipeingredientunit.destroy');
    });

    Route::group(['prefix' => 'steps', 'middleware' => ['auth', 'verified', 'web']], function () {
        Route::get('/create', [StepController::class, 'create'])->name('step.create');
        Route::get('/', [StepController::class, 'index'])->name('step.index');
        Route::get('/{id}', [StepController::class, 'show'])->name('step.show');
        Route::post('/', [StepController::class, 'store'])->name('step.store');
        Route::get('/edit/{id}', [StepController::class, 'edit'])->name('step.edit');
        Route::patch('/{id}', [StepController::class, 'update'])->name('step.update');
        Route::delete('/{id}', [StepController::class, 'destroy'])->name('step.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
