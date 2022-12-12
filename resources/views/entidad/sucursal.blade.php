@extends('layouts.app')

@section('Sucursal', 'formulario sucursal')

@section('meta-description', 'Formulario para sucursal')

@section('content')

    <h1> Formulario de la sucursal </h1>
    
    <form action=''method='POST'>
        @csrf
        Nombre <br>
        <input name= "nombre" type ='text'>

        @error('title')
            <br>
            <small style="color: red">{{$message}}</small>
        @enderror

        </label><br>
        <label>

        Almacen-Stock <br>
        <input name= "Almacen" type ='text'>

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