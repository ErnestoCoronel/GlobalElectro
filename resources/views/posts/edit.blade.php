
@extends('layouts.app')

@section('title', 'edit')

@section('meta-description', 'Pagina de edicion de articulo')

@section('content')

    <h1>Edit form</h1>
    
   
   
    <form action="{{ route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        
        @include('posts.form-fields')


        <button type='submit'>Send</button><br>
    
    </form>

    <h1></h1>

    <a href="{{ route('posts.index')}}">Regresar</a>

@endsection