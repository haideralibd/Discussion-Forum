<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::paginate(6);
        return view('welcome', ['posts'=>$posts]);

    }

    public function searchPosts(Request $request)
    {
       
       $posts = Post::where('title', 'like', '%' . $request->get('searchQuest') . '%')->get(); 

        return json_encode( $posts );
    }
  

}
