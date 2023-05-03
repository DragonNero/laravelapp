<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UnitFormRequest;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('unit.index', [
            'units' =>  Unit::orderBy('name', 'asc')->paginate(20)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(UnitFormRequest $request)
    {
        $request->validated();

        Unit::create([
            'name' => $request->name,
        ]);
        return redirect(route('unit.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('unit.show', [
            'unit' => Unit::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('unit.edit', [
            'unit' => Unit::findOrFail($id)
        ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UnitFormRequest $request, $id)
    {
        $unit = Unit::findOrFail($id);
        $validated = $request->validated();

        $update = $unit->update($validated);

        if ($update) {
            session()->flash('notif.success', 'unit updated successfully!');
            return redirect(route('unit.index'));
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
        $unit = Unit::findOrFail($id);

        $delete = $unit->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'unit deleted successfully!'); //TODO: il faut que ca marche
            return redirect()->route('unit.index');
        }

        return abort(500);
    }
}
