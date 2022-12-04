<?php

namespace App\Http\Controllers;

class PestController

{
public function index(){
        //TODO: Implement __invoke() method.

        $posts = [
            ['title' => 'First post'],
            ['title' => 'Second post'],
            ['title' => 'Third post'],
            ['title' => 'Fourth post']
        ];
    
        return view('blog', ['posts' => $posts]);
    }

}