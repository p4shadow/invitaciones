@extends('layouts.app')

@section('content')
    <title>Lista de Clientes</title>


<h1>Lista de Clientes</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>DNI</th>
            <th>Otro</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->tel }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->dni }}</td>
                <td>{{ $cliente->otro }}</td>
            <td>
                <a href="{{ route('cliente.show', $cliente->id) }}"class="button1">Ver</a>
                <a href="{{ route('cliente.edit', $cliente->id) }}"class="button2">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('cliente.create') }}" class="button3">Agregar Nuevo Cliente</a>
<a href="{{ route('dashboard') }}" class="button4">Volver al Inicio</a>
@endsection