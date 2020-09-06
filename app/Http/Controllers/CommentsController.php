<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($postid)
    {
        $newComment = new Comment();
         $newComment->post_id = $postid;
         $newComment->user_id = auth()->user()->id;
         $newComment->body = request('addComment');
         
         $newComment->save();

         return redirect()->route('specificPost',['post'=>$postid]);
    }
}
