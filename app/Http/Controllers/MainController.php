<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function createPost(){
        return view('createPost');
    }

    public function showPost(Request $request){
        $valid = $request->validate([
            'name' => 'required|max:100',
            'post' => 'required|min:15|max:500'
        ]);
    }
}
