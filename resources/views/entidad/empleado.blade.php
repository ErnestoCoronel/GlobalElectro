@extends('layouts.app')

@section('title', 'formulario empleado')

@section('meta-description', 'Formulario para empleado')

@section('content')

    <h1> Formulario de los empleados </h1>
    
    <form action='envformempleado'method='POST'>
        @csrf
        Nombre del Empleado <br>
        <input name= "nombre" type ='text'>

        @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror

        </label><br>
        <label>

        Servicio <br>
        <input name= "servicio" type ='text'>

        @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror

        </label><br>

        <label>

        Lugar <br>
        <input name= "lugar" type ='text' >

        @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror

        </label>    
        
        <br>

        <button type='submit'>Send</button><br>
    
    </form>
    

@endsection