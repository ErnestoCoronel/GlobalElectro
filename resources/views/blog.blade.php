@extends('layouts.app')

@section('content')

    <h1>blog</h1>
    @foreach($posts as $post)
    
        <h2>{{ $post ['title'] }}</h2>

    @endforeach

@endsection
