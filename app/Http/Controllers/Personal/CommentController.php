<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = auth()->user()->comments;
        return view('personal.comment.home', compact('comments'));
    }

    public function edit()
    {
        $comment = auth()->user()->comments()->findOrFail(request()->comment);
        return view('personal.comment.edit', compact('comment'));
    }

    public function update()
    {
        $comment = auth()->user()->comments()->findOrFail(request()->comment);
        $comment->update(request()->all());
        return redirect()->route('personal.comment.index', compact('comment') );
    }

    public function delete()
    {
        $comment = auth()->user()->comments()->findOrFail(request()->comment);
        $comment->delete();
        return redirect()->route('personal.comment.index', compact('comment'));
    }
}
