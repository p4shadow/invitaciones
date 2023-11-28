@extends('layouts.app')

@section('content')
    <div>
        <h1>Detalles del Servicio</h1>

        <p>ID: {{ $servicio->id }}</p>
        <p>Cliente: {{ $servicio->cliente->nombre }} {{ $servicio->cliente->apellido }}</p>
        <p>Tipo: {{ $servicio->tipo }}</p>
        <p>Detalle: {{ $servicio->detalle }}</p>
        <p>Cantidad de Invitados: {{ $servicio->cant_invitados }}</p>
        <p>Comida: {{ $servicio->comida }}</p>
        <p>Bebida: {{ $servicio->bebida }}</p>
        <p>DJ: {{ $servicio->dj }}</p>
        <p>Fecha: {{ $servicio->fecha }}</p>
        <p>Animador: {{ $servicio->animador }}</p>

        <!-- Puedes agregar más detalles o personalizar según tus necesidades -->
    </div>
    <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
