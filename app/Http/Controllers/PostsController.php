<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mews\Purifier\Facades\Purifier;

class PostsController extends Controller
{
    

    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();

        return view('allPosts', [
            'posts' => $posts
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


    public function edit(Post $post)
    {
        return view('editPost',[ 'post' => $post, 'categories' => Category::all() ]);
    }



    public function store(Request $request)
    {
        $post = new Post;

        $post->user_id = auth()->user()->id;
        $post->title = $request->title;
        $post->body = Purifier::clean($request->body);
        $post->category_id = $request->category;

        $post->save();

        return redirect()->route('specificPost', ['post' => $post->id]);

    }

    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = Purifier::clean($request->body);
        $post->category_id = $request->category;
        $post->updated_at = \Carbon\Carbon::now();
        $post->save();

        return redirect()->route('specificPost', ['post' => $post->id]);

    }

    public function delete($post)
    {

        $delete = Post::find($post);
        $delete->delete();

        return redirect('/allPosts');


    }
   

}
