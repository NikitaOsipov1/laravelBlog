<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function home(){
        $posts = new Post;
        return view('home', ['posts'=>$posts->all()]);
    }

    public function createPost(){
        return view('createPost');
    }

    public function showPost(Request $request){
        $valid = $request->validate([
            'name' => 'required|max:100',
            'post' => 'required|min:15|max:500'
        ]);
        $post = new Post();
        $post->name = $request->input('name');
        $post->post = $request->input('post');
        $post->title = $request->input('title');

        $post->save();

        return redirect()->route('home');

       // return view('home');
    }
}
