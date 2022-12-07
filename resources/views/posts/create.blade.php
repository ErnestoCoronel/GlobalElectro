@extends('layouts.app')

@section('title', 'Crear nuevo post')

@section('meta-description', 'Formulario para crear un nuebo blog post')

@section('content')

    <h1> Create new post </h1>
    
    <form action="{{ route('posts.store')}}"method='POST'>
        @csrf
        <label>

            Title <br>
            <input name= "title" type ='text' value="{{ old('title')}}">
            
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>
        
        <label>

            body <br>
            <textarea name= "body" value="{{ old('title')}}"></textarea>
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