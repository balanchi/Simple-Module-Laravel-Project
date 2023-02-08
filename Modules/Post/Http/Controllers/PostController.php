<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Post\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Illuminate\Contracts\Support\Renderable;
use Modules\Post\Http\Requests\CreatePostRequest;
use Modules\Post\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $posts = Post::all();
        return view('post::index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::all();
        return view('post::create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostRequest $request)
    {
        $inputs = $request->all();
        Post::create($inputs);
        return to_route('post.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('post::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('post::edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $inputs = $request->all();
        $post->update(['title' => $inputs['title'], 'description' => $inputs['description'], 'category_id' => $inputs['category_id']]);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}