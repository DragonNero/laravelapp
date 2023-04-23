<?php

namespace App\Http\Controllers;

use id;
use App\Models\Category;
// use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryFormRequest;

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

    public function home()
    {
        return view('category.home', [
            'categories' =>  Category::orderBy('order', 'asc')->paginate(200)
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(CategoryFormRequest $request)
    {
        $request->validated();

        Category::create([
            'name' => $request->name,
            'image_path' => $this->storeImage($request),
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
        $category = Category::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image_path')) {
            // delete image
            Storage::disk('images')->delete($category->image_path);

            $filePath = $this->storeImage($request);
            $validated['image_path'] = $filePath;
        }

        $update = $category->update($validated);

        if ($update) {
            session()->flash('notif.success', 'category updated successfully!');
            return redirect(route('category.index'));
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
        $category = Category::findOrFail($id);

        Storage::disk('images')->delete($category->image_path);

        $delete = $category->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'category deleted successfully!'); //TODO: il faut que ca marche
            return redirect()->route('category.index');
        }

        return abort(500);
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image_path->extension();

        $request->image_path->storeAs('public/images', $newImageName);

        return $newImageName;
    }
}
