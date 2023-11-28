@extends('layouts.app')

@section('content')
    <h1>Listado de Invitaciones</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Tipo de Reunión</th>
                <th>Años</th>
                <th>Fecha del Evento</th>
                <th>Hora de Inicio</th>
                <th>Hora Final</th>
                <th>Tema</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invitaciones as $invitacion)
                <tr>
                    <td>{{ $invitacion->id }}</td>
                    <td>{{ $invitacion->cliente->nombre }} {{ $invitacion->cliente->apellido }}</td>
                    <td>{{ $invitacion->tipo_reunion }}</td>
                    <td>{{ $invitacion->anios }}</td>
                    <td>{{ $invitacion->fecha_evento }}</td>
                    <td>{{ $invitacion->hr_inicio }}</td>
                    <td>{{ $invitacion->hr_final }}</td>
                    <td>{{ $invitacion->tema }}</td>
                    <td>
                        <a href="{{ route('invitacion.show', $invitacion->id) }}"class="button1">Ver</a>
                        <a href="{{ route('invitacion.edit', $invitacion->id) }}"class="button2">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('invitacion.create') }}" class="button3">Agregar Nueva Invitacion</a>
    <a href="{{ route('dashboard') }}" class="button4">Volver al Inicio</a>
@endsection
