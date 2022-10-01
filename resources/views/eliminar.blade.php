@extends('layout/plantilla');

@section("tituloPagina", "eliminar")

@section('contenido')
<div class="card">
    <h5 class="card-header">elimnar</h5>
    <div class="card-body">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro de eliminar este registro!!!

            <table class="table table-sm table-hover table-bordered" style="background-color: white">
                <thead>
                    <th>carne</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>direccion</th>
                    <th>telefono</th> 
                    <th>correo</th>
                    <th>sangre</th>
                    <th>fecha nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $personas->carne }}</td>
                        <td>{{ $personas->nombres }}</td>
                        <td>{{ $personas->apellidos }}</td>
                        <td>{{ $personas->direccion }}</td>
                        <td>{{ $personas->telefono }}</td>
                        <td>{{ $personas->correo }}</td>
                        <td>{{ $personas->sangre }}</td>
                        <td>{{ $personas->fecha_nacimiento }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route("personas.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-danger">
                    <span class="fas fa-user-times"></span> Eliminar 
                </button>
            </form>
        </div>
    </p>
      
    </div>
  </div>  
@endsection
