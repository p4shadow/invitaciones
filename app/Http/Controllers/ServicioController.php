<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicio.index', compact('servicios'));
    }

    public function create()
    {
        $clientes = Cliente::all(); // Obtén todos los clientes
    
        return view('servicio.create', compact('clientes'));
    }

 
    public function store(Request $request)
{
    // Validación de datos
    $request->validate([
        'id_cliente' => 'required',
        'tipo' => 'required',
        'detalle' => 'required',
        'cant_invitados' => 'required|numeric',
        'comida' => 'required',
        'bebida' => 'required',
        'dj' => 'required',
        'fecha' => 'required|date',
        'animador' => 'required',
    ]);
    // Crear una nueva instancia de Servicio y asignar los valores del formulario
    $servicio = new Servicio();
    $servicio->id_cliente = $request->input('id_cliente');
    $servicio->tipo = $request->input('tipo');
    $servicio->detalle = $request->input('detalle');
    $servicio->cant_invitados = $request->input('cant_invitados');
    $servicio->comida = $request->input('comida');
    $servicio->bebida = $request->input('bebida');
    $servicio->dj = $request->input('dj');
    $servicio->fecha = $request->input('fecha');
    $servicio->animador = $request->input('animador');
// Otros campos...

    // Guardar el nuevo servicio en la base de datos
    $servicio->save();

    // Redireccionar a la vista de index o a donde prefieras
    return redirect()->route('servicio.index')->with('success', 'Servicio creado exitosamente.');
}
    
  
    
public function show($id)
{
    $servicio = Servicio::with('cliente')->find($id);

    return view('servicio.show', compact('servicio'));
}

    public function edit($id)
    {
   
        $servicio = Servicio::find($id);
        $clientes = Cliente::all();

        return view('servicio.edit', compact('servicio', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Agrega las reglas de validación según tus necesidades
        ]);

        $servicio = Servicio::find($id);
        $servicio->fill($request->all());
        $servicio->save();

        return redirect()->route('servicio.index')->with('success', 'Servicio actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
