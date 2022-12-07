<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PestController

{
public function index(){
        //TODO: Implement __invoke() method.

        $posts = Post::get();

    
        return view('posts.index', ['posts' => $posts]);
    }


public function show(Post $post)
    {
        return view('posts.show', ['post'=> $post]) ;

    }

public function create()
    {
        return view('posts.create');

    }


public function store(Request $request)
    {
        $request->validate([
           'title' => ['required', 'min:4'],
           'body' => ['required'],
        
        
        ]);
        $post = new Post;
        $post-> Title  = $request->input('title');
        $post-> body  = $request->input('body');
        $post-> save();

        session()->flash('status', 'Post new created');

        return to_route('posts.index'); 

        

    }

public function edit(Post $post)
    {
        return view('posts.edit', ['post'=> $post]);

    }

public function update(Request  $request,Post $post)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required'],
         
         
         ]);
         
         $post-> Title  = $request->input('title');
         $post-> body  = $request->input('body');
         $post-> save();
 
         session()->flash('status', 'Post update');
 
         return to_route('posts.show', $post); 
    }

}
