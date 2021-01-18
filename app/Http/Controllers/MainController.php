<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class MainController extends Controller
{
    public function home(){
        $posts = new Post;
        return view('home', ['posts'=>$posts->all()]);
    }

    public function dashboard(){
        $posts = new Post;
        $user = new User;
        echo($user['name']);
        return view('dashboard', ['posts'=>$posts->all()]);
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

        return redirect()->route('dashboard');

       // return view('home');
    }
}
