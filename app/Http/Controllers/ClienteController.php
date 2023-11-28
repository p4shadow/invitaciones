<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create()
{
    return view('cliente.create');
}

public function store(Request $request)
{
    // Validación de datos
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'tel' => 'required',
        'direccion' => 'required',
        'dni' => 'required',
        'otro' => 'required',
        // Agrega validaciones para los demás campos aquí
    ]);

    // Crear el cliente
    Cliente::create($request->all());

    // Redireccionar a la lista de clientes o a donde lo desees
    return redirect()->route('cliente.index')->with('success', 'Cliente creado exitosamente.');
}

public function show($id)
    {
    $cliente = Cliente::find($id);

    return view('cliente.show', ['cliente' => $cliente]);
    }

    public function edit($id)
{
    $cliente = Cliente::findOrFail($id);
    return view('cliente.edit', compact('cliente'));
}

public function update(Request $request, $id)
{
    $cliente = Cliente::findOrFail($id);

    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'tel' => 'required|string|max:20',
        'direccion' => 'required|string|max:255',
        'dni' => 'required|string|max:20',
        'otro' => 'nullable|string|max:255',
    ]);

    $cliente->update($request->all());

    return redirect()->route('cliente.index')->with('success', 'Cliente actualizado exitosamente');
}

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
