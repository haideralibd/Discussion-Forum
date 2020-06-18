<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

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
    

    public function create()
    {
        return view('createPost', [
            'categories' => Category::all()
            ]);    
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->body = Purifier::clean($request->body);
        $post->category_id = $request->category;

        $post->save();

        return redirect('/');

    }
}
