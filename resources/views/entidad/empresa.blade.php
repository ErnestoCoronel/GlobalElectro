@extends('layouts.app')

@section('Empresa', 'vista')

@section('meta-description', 'Datos de sucursales y empleados')

@section('content')

<h1> Empresa GLOBAL-ELECTRO </h2>



    <h2> Datos de las surcursales</h2>
    
    
    
        <div style='display: flex; align-items: baseline'>
        <h2> 
                <a href="#"></a>
            
        </h2> &nbsp;
        
            <a href="#">Edit</a><br>
        
            <form action="#" method="POST">

                @csrf
                @method('DELETE')

                <button type='submit'>Delete</button>
            </form>
        
        </div>



    <h2> Datos de los empleados</h2>


    
        <div style='display: flex; align-items: baseline'>
            <h2> 
                <a href="#">
                
                </a>
            
        </h2> &nbsp;
        
            <a href="#">Edit</a><br>
        
            <form action="#" method="POST">

                @csrf
                @method('DELETE')

                <button type='submit'>Delete</button>
            </form>
        
        </div>


    
    
    

@endsection