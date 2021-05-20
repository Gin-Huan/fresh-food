<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request){
        $posts = Post::get();
        return view('news',compact('posts'));
    }

    public function show(Request $request,$id){
        $post = Post::find($id);

        return view('news-details',compact('post'));
    }
}