@extends('layouts.app')

@section('content')

<form action="{{ route('login')}}"method='POST'>
        @csrf

        <label>

            Email <br>
            <input name= "email" type ='email' value="{{ old('email')}}">

            @error('email')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>

        <label>

            Password <br>
            <input name= "password" type ='password' >
            
            @error('password')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>
        
        <label class='flex items-center'>

            
            <input name= "remember" type ="checkbox">Recuérdame <br>

        </label><br>
        
        <h1></h1> 
        
        <button type='submit'>Login</button><br>
    
    </form><br>

    <a href="{{ route('register')}}">Register</a>
   
    

@endsection
