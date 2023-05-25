<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {

        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('admin.post.edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $request->validated();
        $post->update($request->all());

        return redirect()->route('admin.post.show', compact('post'));
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index',compact('post'));
    }


}
