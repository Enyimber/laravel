<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('Home');
    }

    public function blog(){
        //$posts = Post::get();
        //$post= Post::first();
        //$post= Post::find(25);
        
        //dd($post);

        $posts = post::latest()->paginate();

        return view('Blog',['posts' => $posts]);
    }

    public function post(Post $post){

    return view('Post',['post' => $post]);
    }
}
