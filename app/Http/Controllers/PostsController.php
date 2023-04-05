<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Requests\PostFormRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('recipe.index', [
            'posts' =>  Post::orderBy('updated_at', 'desc')->paginate(20)
        ]);
    }

    /**`
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(PostFormRequest $request)
    {
        $request->validated();

        Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'minutes_to_read' => $request->minutes_to_read,
            'image_path' => $this->storeImage($request),
            'is_published' => $request->is_published === 'on',
        ]);
        return redirect(route('recipe.index'));
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     * Optional route parameter needs to have a default value eg: $id = 1
     */
    public function show($id)
    {
        return view('recipe.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('recipe.edit', [
            'post' => Post::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PostFormRequest $request, $id)
    {
        $request->validated();
        Post::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));
        return redirect(route('recipe.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('recipe.index'))->with('message', 'Post have been deleted');
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
