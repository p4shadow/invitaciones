@extends('layouts.app')

@section('content')
    <h1>Lista de Servicios</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Cliente</th>
                <th>Tipo</th>
                <th>Detalle</th>
                <th>Cant. Invitados</th>
                <th>Comida</th>
                <th>Bebida</th>
                <th>DJ</th>
                <th>Fecha</th>
                <th>Animador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->id }}</td>
                    <td>{{ $servicio->id_cliente }}</td>
                    <td>{{ $servicio->tipo }}</td>
                    <td>{{ $servicio->detalle }}</td>
                    <td>{{ $servicio->cant_invitados }}</td>
                    <td>{{ $servicio->comida }}</td>
                    <td>{{ $servicio->bebida }}</td>
                    <td>{{ $servicio->dj }}</td>
                    <td>{{ $servicio->fecha }}</td>
                    <td>{{ $servicio->animador }}</td>
                    <td>
                        <a href="{{ route('servicio.show', $servicio->id) }}"class="button1">Ver</a>
                        <a href="{{ route('servicio.edit', $servicio->id) }}"class="button2">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('servicio.create') }}" class="button3">Agregar Nuevo Servicio</a>
    <a href="{{ route('dashboard') }}" class="button4">Volver al Inicio</a>
    @endsection