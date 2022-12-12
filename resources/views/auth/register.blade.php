@extends('layouts.app')

@section('content')

<form action="{{ route('register')}}"method='POST'>
        @csrf
        
        <label>

            Name <br>
            <input autofocus='autofocus' name= "name" type ='text' value="{{ old('name')}}">

            @error('name')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>

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
        
        <label>

            Password Confirmation<br>
            <input name= "password_confirmation" type ='password' >

            @error('password_confirmation')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label><br>
        
        <h1></h1> 
        <button type='submit'>Register</button><br>
</form>


<h1></h1>

<a href="{{ route('login')}}">Login</a>

@endsection
