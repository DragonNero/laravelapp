<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index', [
            'categories' =>  Category::orderBy('order', 'asc')->get()
        ]);
    }

    public function categoryrecipe($name)
    {
        return view('home.categoryrecipe', [
            'category' =>  Category::where('name', '=', $name)->firstOrFail(),
            'recipes' =>  DB::table('recipes')
                ->join('categories', 'recipes.category_id', '=', 'categories.id')
                ->where('categories.name', $name)
                ->orderBy('recipes.name', 'asc')
                ->select('recipes.*')
                ->get()
        ]);
    }

    public function all()
    {
        return view('home.all', [
            'recipes' =>  Recipe::orderBy('id', 'asc')->get()
        ]);
    }

    public function recipe($id)
    {
        return view('home.recipe', [
            'recipe' =>  Recipe::findOrFail($id),
        ]);
    }
}
