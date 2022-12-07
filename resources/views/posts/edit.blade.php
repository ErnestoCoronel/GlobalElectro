
@extends('layouts.app')

@section('title', 'edit')

@section('meta-description', 'Pagina de edicion de articulo')

@section('content')

    <h1>Edit form</h1>
    
   @dump($post->toArray())
   
    <form action="{{ route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        
        <label>

            Title <br>
            <input name= "title" type ='text' value="{{ old('title', $post->Title)}}">
            
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
            <br>
        <label>

            Body <br>
            <textarea name= "Body" value="{{ old('body', $post->body)}}"></textarea>
            @error('body')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror

        </label><br>

        <button type='submit'>Send</button><br>
    
    </form>

    <h1></h1>

    <a href="{{ route('posts.index')}}">Regresar</a>

@endsection