<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RecipeFormRequest;
use App\Models\Category;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipe.index', [
            'recipes' =>  Recipe::orderBy('name', 'asc')->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipe.create', [
            'categories' => Category::orderBy('order', 'asc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeFormRequest $request)
    {
        $request->validated();

        Recipe::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image_path' => $this->storeImage($request),
            'prep_time' => $request->prep_time,
            'cook_time' => $request->cook_time,
            'rest_time' => $request->rest_time,
            'servings' => $request->servings,
        ]);
        return redirect(route('recipe.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('recipe.show', [
            'recipe' => Recipe::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('recipe.edit', [
            'recipe' => Recipe::findOrFail($id),
            'categories' => Category::orderBy('order', 'asc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeFormRequest $request, $id)
    {
        $recipe = Recipe::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image_path')) {
            // delete image
            Storage::disk('images')->delete($recipe->image_path);

            $filePath = $this->storeImage($request);
            $validated['image_path'] = $filePath;
        }

        $update = $recipe->update($validated);

        if ($update) {
            session()->flash('notif.success', 'recipe updated successfully!');
            return redirect(route('recipe.index'));
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        Storage::disk('images')->delete($recipe->image_path);

        $delete = $recipe->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'recipe deleted successfully!'); //TODO: il faut que ca marche
            return redirect()->route('recipe.index');
        }

        return abort(500);
    }

    private function storeImage($request)
    {
        $name = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), $request->name);

        $newImageName = uniqid() . '-' . $name . '.' . $request->image_path->extension();

        $request->image_path->storeAs('public/images', $newImageName);

        return $newImageName;
    }
}
