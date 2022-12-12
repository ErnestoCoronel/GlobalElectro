<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\empleado;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Illuminate\Routing\Controllers\Middleware;
use App\Http\Middleware\Authenticate;
class PestController

{

public function __contruct(){

        $this->Middleware('auth', ['only' => ['about']]);
}

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
        return view('posts.create', ['post'=> new Post]);

    }


public function store(SavePostRequest $request)
    {
       

        Post::create($request -> validated());

        
        return to_route('posts.index')->with('status', 'Post Created!'); 

        

    }

public function edit(Post $post)
    {
        return view('posts.edit', ['post'=> $post]);

    }

public function update(SavePostRequest $request,Post $post)
    {
        
         
         $post->update($request -> validated());
 
         
 
         return to_route('posts.show', $post)->with('status', 'Post Update'); 
    }

public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status','Post deleted');
        
    }



// entidades

public function crearformularioempleado()
    {
        return view('/empleado', ['empleado'=> new empleado]);

    }





}
