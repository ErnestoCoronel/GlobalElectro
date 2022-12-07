@extends('layouts.app')

@section('content')

    <h1>blog</h1>
    <a href="{{ route('posts.create')}}">Create new post</a>
    @foreach($posts as $post)
    
        <h2> 
            <a href="{{ route('posts.show', $post->id)}}">
                {{$post->Title}}
            </a>
            
        </h2>

    @endforeach

@endsection
