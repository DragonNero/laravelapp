<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Response;
use App\Models\RecipeIngredientUnit;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RecipeIngredientUnitFormRequest;

class RecipeIngredientUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipeingredientunit.index', [
            'recipeingredientunit' =>  RecipeIngredientUnit::orderBy('recipe_id', 'asc')->paginate(20)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipeingredientunit.create', [
            'recipes' => Recipe::orderBy('id', 'asc')->get(),
            'ingredients' => Ingredient::orderBy('id', 'asc')->get(),
            'units' => Unit::orderBy('id', 'asc')->get(),

        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(RecipeIngredientUnitFormRequest $request)
    {
        $request->validated();

        RecipeIngredientUnit::create([
            'recipe_id' => $request->recipe_id,
            'unit_id' => $request->unit_id,
            'ingredient_id' => $request->ingredient_id,
            'value' => $request->value,
        ]);
        return redirect(route('recipeingredientunit.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('recipeingredientunit.show', [
            'recipeingredientunit' => RecipeIngredientUnit::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('recipeingredientunit.edit', [
            'recipeingredientunit' => RecipeIngredientUnit::findOrFail($id),
            'recipes' => Recipe::orderBy('id', 'asc')->get(),
            'ingredients' => Ingredient::orderBy('id', 'asc')->get(),
            'units' => Unit::orderBy('id', 'asc')->get(),
        ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(RecipeIngredientUnitFormRequest $request, $id)
    {
        $recipeingredientunit = RecipeIngredientUnit::findOrFail($id);
        $validated = $request->validated();


        $update = $recipeingredientunit->update($validated);

        if ($update) {
            session()->flash('notif.success', 'recipeingredientunit updated successfully!');
            return redirect(route('recipeingredientunit.index'));
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $recipeingredientunit = RecipeIngredientUnit::findOrFail($id);

        $delete = $recipeingredientunit->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'recipeingredientunit deleted successfully!');
            //TODO: il faut que ca marche
            return redirect()->route('recipeingredientunit.index');
        }

        return abort(500);
    }
}
