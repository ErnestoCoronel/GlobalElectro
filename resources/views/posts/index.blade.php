@extends('layouts.app')

@section('content')



    <h1>blog</h1>
    <a href="{{ route('posts.create')}}">Create new post</a>
    @foreach($posts as $post)
    
        <div style='display: flex; align-items: baseline'>
            <h2> 
                <a href="{{ route('posts.show', $post->id)}}">
                {{$post->Title}}
                </a>
            
        </h2> &nbsp;
        @auth
            <a href="{{ route('posts.edit', $post)}}">Edit</a>
        
            <form action="{{ route('posts.destroy', $post )}}" method="POST">

                @csrf
                @method('DELETE')

                <button type='submit'>Delete</button>
            </form>
        @endauth
        </div>

    @endforeach

@endsection
