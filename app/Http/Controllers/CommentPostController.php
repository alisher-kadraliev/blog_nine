<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class CommentPostController extends Controller
{

    public function store(Post $post, StoreRequest $request)
    {
    $data = $request->validated();
$data['user_id'] = auth()->user()->id;
$data['post_id'] = $post->id;
    Comment::create($data);

    return redirect()->route('post.show', $post->id);
    }

}
