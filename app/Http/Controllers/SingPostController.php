<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SingPostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        $randomPosts = Post::get()->random(4);
        $likedPosts =Post::withCount('likedUsers')->orderBy('liked_users_count','DESC')->get()->take(4);
        return view('front.front', compact('posts','randomPosts','likedPosts'));
    }

    public function show(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id',$post->category_id)
            ->where('id','!=',$post->id)
            ->get()
            ->take(3);
            return view('front.main.show', compact('post','date','relatedPosts'));
    }


}
