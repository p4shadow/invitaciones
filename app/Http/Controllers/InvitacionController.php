<?php

namespace App\Http\Controllers;

use App\Models\Invitacion;
use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvitacionController extends Controller
{
    public function index()
    {
        $invitaciones = Invitacion::with('cliente')->get();

        return view('invitacion.index', compact('invitaciones'));
    }

    public function create()
    {
        $clientes = Cliente::all(); // Obtén todos los clientes para el campo de selección

        return view('invitacion.create', compact('clientes'));
    }


    
    public function store(Request $request)
    {
        
        // Validar los datos del formulario
        $request->validate([
            'id_cliente' => 'required|exists:cliente,id',
            'tipo_reunion' => 'required',
            'anios' => 'required',
            'fecha_evento' => 'required|date',
            'hr_inicio' => 'required|date_format:H:i',
            'hr_final' => 'required|date_format:H:i|after:hr_inicio',
            'tema' => 'required',
        ]);

        // Crear una nueva instancia de Invitacion con los datos del formulario
        $invitacion = new Invitacion([
            'id_cliente' => $request->input('id_cliente'),
            'tipo_reunion' => $request->input('tipo_reunion'),
            'anios' => $request->input('anios'),
            'fecha_evento' => $request->input('fecha_evento'),
            'hr_inicio' => $request->input('hr_inicio'),
            'hr_final' => $request->input('hr_final'),
            'tema' => $request->input('tema'),
        ]);

        // Guardar la nueva invitación en la base de datos
        $invitacion->save();

        // Redireccionar a la vista de detalle de la invitación, por ejemplo
        return redirect()->route('invitacion.show', ['invitacion' => $invitacion->id])
            ->with('success', 'Invitación creada correctamente');
    }


    public function show($id)
    {
        // Obtén la invitación y carga la relación con el cliente
        $invitacion = Invitacion::with('cliente')->find($id);

        // Pasa los datos a la vista
        return view('invitacion.show', ['invitacion' => $invitacion]);
    }

    public function edit($id)
    {
        $invitacion = Invitacion::findOrFail($id);
        $clientes = Cliente::all(); // Esto es para obtener la lista de clientes

        return view('invitacion.edit', compact('invitacion', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $invitacion = Invitacion::findOrFail($id);

        // Valida y actualiza los datos de la invitación
        $request->validate([
            'id_cliente' => 'required',
            'tipo_reunion' => 'required',
            'anios' => 'required',
            'fecha_evento' => 'required|date',
            'hr_inicio' => 'required|date_format:H:i',
            'hr_final' => 'required|date_format:H:i|after:hr_inicio',
            'tema' => 'required',
            // Agrega otras validaciones según sea necesario
        ]);

        $invitacion->id_cliente = $request->input('id_cliente');
        $invitacion->tipo_reunion = $request->input('tipo_reunion');
        $invitacion->anios = $request->input('anios');
        $invitacion->fecha_evento = $request->input('fecha_evento');
        $invitacion->hr_inicio = $request->input('hr_inicio');
        $invitacion->hr_final = $request->input('hr_final');
        $invitacion->tema = $request->input('tema');
        // Actualiza otros campos según sea necesario

        $invitacion->save();

        return redirect()->route('invitacion.index')->with('success', 'Invitación actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invitacion $invitacion)
    {
        //
    }
}
