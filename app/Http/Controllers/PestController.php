<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PestController

{
public function index(){
        //TODO: Implement __invoke() method.

        $posts = Post::get();

    
        return view('blog', ['posts' => $posts]);
    }

}