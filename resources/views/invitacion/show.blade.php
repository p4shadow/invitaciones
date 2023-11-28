@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de Invitación</h1>
        
        <dl>
            <dt>ID:</dt>
            <dd>{{ $invitacion->id }}</dd>
            
            <dt>Cliente:</dt>
            <dd>{{ $invitacion->cliente->nombre }} {{ $invitacion->cliente->apellido }}</dd>
            
            <dt>Tipo de Reunión:</dt>
            <dd>{{ $invitacion->tipo_reunion }}</dd>
            
            <dt>Años:</dt>
            <dd>{{ $invitacion->anios }}</dd>
            
            <dt>Fecha del Evento:</dt>
            <dd>{{ $invitacion->fecha_evento }}</dd>
            
            <dt>Hora de Inicio:</dt>
            <dd>{{ $invitacion->hr_inicio }}</dd>
            
            <dt>Hora Final:</dt>
            <dd>{{ $invitacion->hr_final }}</dd>
            
            <dt>Tema:</dt>
            <dd>{{ $invitacion->tema }}</dd>
            
            <!-- Puedes agregar más campos aquí según sea necesario -->
        </dl>
        <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
        <!-- Agrega cualquier otro HTML o diseño necesario -->
    </div>
@endsection
