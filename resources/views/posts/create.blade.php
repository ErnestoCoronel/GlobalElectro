@extends('layouts.app')

@section('title', 'Crear nuevo post')

@section('meta-description', 'Formulario para crear un nuebo blog post')

@section('content')

    <h1> Create new post </h1>
    
    <form action="{{ route('posts.store')}}"method='POST'>
        @csrf
        @include('posts.form-fields')    

        <button type='submit'>Send</button><br>
    
    </form>
    <h1></h1>
    <a href="{{ route('posts.index')}}">Regresar</a>


@endsection