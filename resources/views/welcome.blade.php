@extends('layout/plantilla');

@section('tituloPagina', 'Crud con Laravel /')
    
@section('contenido')
<br><br>
<div class="card">
    <h5 class="card-header">Crud</h5>
    <div class="card-body">
        <div class="row">
           
        </div>
      <p>
        <a href="{{ route("personas.create") }}" class="btn btn-primary">agregar nuevo estudiante</a>
      </p>
      <hr>

      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>carne</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>correo</th>
                    <th>sangre</th>
                    <th>fecha de nacimiento</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </thead>
                <tbody>

            @foreach ($datos as $item)
                <tr>
                    <td>{{ $item->carne }}</td>
                    <td>{{ $item->nombres }}</td>
                    <td>{{ $item->apellidos }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->correo_electronico }}</td>
                    <td>{{ $item->id_tipo_sangre }}</td>
                    <td>{{ $item->fecha_nacimiento }}</td>
                    <td>
                        <form action="">
                            <button class="btn btn-warning btn-sm">
                                editar
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route("personas.edit", $item->id_estudiante)}}" method="get">
                            <button class="btn btn-danger btn-sm">
                                    eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
      </p>
   </div>
</div>

@endsection