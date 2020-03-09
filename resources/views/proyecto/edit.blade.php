@extends('layout.layout')

@section('titulo','Modificar proyecto')
    

@section('contenido')
<h1 class="text-center">Modificar Proyecto</h1>
<br><br> 
@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"> <strong>Ups. =)</strong>Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
@endif
<br><br>
<form action="{{route('proyecto.update', $proyecto->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombre del Proyecto:</label>
                <input type="text" class="form-control" name="nombre" value="{{$proyecto->nombre}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Duración del Proyecto en meses:</label>
                    <input type="number" class="form-control" name="duracion" value="{{$proyecto->duracion}}" >
                </div>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Modificar Proyecto</button>
            </div>
@endsection