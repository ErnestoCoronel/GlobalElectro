

@extends('layouts.app')

@section('title', 'home')

@section('meta-description', 'Pagina de inicio')

@section('content')

    <h1>{{ $post->Title }}</h1>
    
    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.index')}}">Regresar</a>


@endsection