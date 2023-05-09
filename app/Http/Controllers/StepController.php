<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;
use App\Http\Requests\StepFormRequest;
use App\Models\Recipe;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('step.index', [
            'steps' =>  Step::orderBy('recipe_id', 'asc')->paginate(20)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('step.create', [
            'recipes' => Recipe::orderBy('id', 'asc')->get(),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(StepFormRequest $request)
    {
        $request->validated();

        Step::create([
            'recipe_id' => $request->recipe_id,
            'order' => $request->order,
            'instruction' => $request->instruction,
        ]);
        return redirect(route('step.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('step.show', [
            'step' => Step::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('step.edit', [
            'step' => Step::findOrFail($id),
            'recipes' => Recipe::orderBy('id', 'asc')->get(),
        ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(StepFormRequest $request, $id)
    {
        $step = Step::findOrFail($id);
        $validated = $request->validated();

        $update = $step->update($validated);

        if ($update) {
            session()->flash('notif.success', 'step updated successfully!');
            return redirect(route('step.index'));
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
        $step = Step::findOrFail($id);

        $delete = $step->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'step deleted successfully!'); //TODO: il faut que ca marche
            return redirect()->route('step.index');
        }

        return abort(500);
    }
}
