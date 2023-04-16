<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use id;
// use GuzzleHttp\Psr7\Response;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index', [
            'categories' =>  Category::orderBy('order', 'asc')->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     * public function store(Request $request)
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'image_path' => 'temporary',
            'order' => $request->order,
        ]);

        return redirect(route('category.index'));
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('category.show', [
            'category' => Category::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('category.edit', [
            'category' => Category::findOrFail($id)
        ]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        $request->validated();
        Category::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
