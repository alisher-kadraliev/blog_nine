<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class LikePostController extends Controller
{

    public function store(Post $post)
    {
        auth()->user()->LikedPosts()->toggle($post->id);

        return redirect()->route('front.index', $post->id);
    }

}
