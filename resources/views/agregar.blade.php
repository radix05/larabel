@extends('layout/plantilla');

@section("tituloPagina", "crear nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{route('personas.store') }}" method="POST">
            @csrf
            <label for="">carne</label>
            <input type="text" name="carne" class="form-control" required>
            <label for="">nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">apellidos</label>
            <input type="text" name="apellidos" class="form-control" required>
            <label for="">direccion</label>
            <input type="text" name="direccion" class="form-control" required>
            <label for="">telefono</label>
            <input type="text" name="telefono" class="form-control" required>
            <label for="">correo</label>
            <input type="text" name="correo_electronico" class="form-control" required>
            <label for="">sangre</label>
            <input type="text" name="id_tipo_sangre" class="form-control" required>
            <label for="">fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>
            <a href="{{ route("personas.index") }}" class="btn btn-primary">regresar</a>
            <button class=" btn btn-primary">Agregar</button>
            
        </form>
      </p>
      
    </div>
  </div>  
@endsection
