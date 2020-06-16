<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    

    public function index()
    {
        return view('welcome', [
            'posts' => Post::all()
            ]);
    }

    public function show(Post $post)
    {
        return view('showPost',[ 'post' => $post ]);
    }
}
