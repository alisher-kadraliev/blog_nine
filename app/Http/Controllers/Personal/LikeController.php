<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;


class LikeController extends Controller
{
    public function index()
    {

        return view('personal.like.home');
    }
}
