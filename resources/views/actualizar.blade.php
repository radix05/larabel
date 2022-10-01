@extends('layout/plantilla');

@section("tituloPagina", "crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">actualizar</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="#">
            <label for="">carne</label>
            <input type="text" name="carne" class="form-control" required required value="{{$oersonas->carne}}">
            <label for="">nombre</label>
            <input type="text" name="nombre" class="form-control" required required value="{{$oersonas->nombre}}">
            <label for="">apellidos</label>
            <input type="text" name="apellidos" class="form-control" required required value="{{$oersonas->apellidos}}">
            <label for="">direccion</label>
            <input type="text" name="direccion" class="form-control" required required value="{{$oersonas->direccion}}">
            <label for="">telefono</label>
            <input type="text" name="telefono" class="form-control" required required value="{{$oersonas->telefono}}">
            <label for="">correo</label>
            <input type="text" name="correo" class="form-control" required required value="{{$oersonas->correo}}">
            <label for="">sangre</label>
            <input type="text" name="sangre" class="form-control" required required value="{{$oersonas->sangre}}">
            <label for="">fecha de nacimiento</label>
            <input type="text" name="fn" class="form-control" required required value="{{$oersonas->fecha_nacimiento}}">
            <br>
            <a href="{{ route("personas.index") }}" class="btn btn-primary">regresar</a>
            <button class=" btn btn-warning">actualizar</button>
            
        </form>
      </p>
      
    </div>
  </div>  
@endsection
