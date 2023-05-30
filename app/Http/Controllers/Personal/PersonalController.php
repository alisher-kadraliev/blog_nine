<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {

        return view('personal.main.home');
    }
}
