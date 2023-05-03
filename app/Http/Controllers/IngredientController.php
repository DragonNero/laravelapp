<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\IngredientFormRequest;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ingredient.index', [
            'ingredients' =>  Ingredient::orderBy('name', 'asc')->paginate(20)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredient.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(IngredientFormRequest $request)
    {
        $request->validated();

        Ingredient::create([
            'name' => $request->name,
        ]);
        return redirect(route('ingredient.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('ingredient.show', [
            'ingredient' => Ingredient::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('ingredient.edit', [
            'ingredient' => Ingredient::findOrFail($id)
        ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(IngredientFormRequest $request, $id)
    {
        $ingredient = Ingredient::findOrFail($id);
        $validated = $request->validated();

        $update = $ingredient->update($validated);

        if ($update) {
            session()->flash('notif.success', 'ingredient updated successfully!');
            return redirect(route('ingredient.index'));
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
        $ingredient = Ingredient::findOrFail($id);

        $delete = $ingredient->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'ingredient deleted successfully!'); //TODO: il faut que ca marche
            return redirect()->route('ingredient.index');
        }

        return abort(500);
    }
}
