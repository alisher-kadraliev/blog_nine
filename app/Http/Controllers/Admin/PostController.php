<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('admin.post.create', compact('categories', 'tags'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $post = Post::firstOrCreate($data);
        $post->tags()->attach($tagIds);
        return redirect()->route('admin.post.index');
    }

    public function show(Post $post)
    {

        return view('admin.post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(UpdateRequest $request, Post $post)
    {

        $data = $request->validated();
        $tagsIds = $data['tag_ids'];
        unset($data['tag_ids']);
        $post = Post::firstOrCreate($data);
        $post->tags()->sync($tagsIds);

        return redirect()->route('admin.post.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index', compact('post'));
    }


}
