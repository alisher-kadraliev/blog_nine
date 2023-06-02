<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $data = [];
        $data['likeCount'] = auth()->user()->likedPosts()->count();
        $data['commentCount'] = Comment::all()->count();
        return view('personal.main.home',compact('data'));
    }
}
