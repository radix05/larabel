<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
       $datos = estudiantes::all();
        return view('welcome', compact('datos'));
    }

    public function create()
    {
        //formulario de agregar datos
        return view('agregar');
    }

    
    public function store(Request $request)
    {
        //guarda datos en la bd
        $personas = new estudiantes();
        $personas->carne = $request->post('carne');
        $personas->nombres = $request->post('nombres');
        $personas->apellidos = $request->post('apellidos');
        $personas->direccion = $request->post('direccion');
        $personas->telefono = $request->post('telefono');
        $personas->correo_electronico= $request->post('correo_electronico');
        $personas->id_tipo_sangre = $request->post('id_tipo_sangre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->whith("succes","nice job bro!!");
    }

  
    public function show(estudiantes $estudiantes)
    {
        //obtenemos registros de la tabla
        return view('eliminar');
    }
    

    public function edit($id)
    {
        //trae los datos que se editan y colocar en formulario
        $personas = estudiantes::find($id);
        return view('actualizar', compact('personas'));
      
    }

    
    public function update(Request $request, $id)
    {
        //atualiza los datos en la bd
    }

    
    public function destroy(estudiantes $estudiantes)
    {
        //elimina un registro
    }
}
