{{-- resources/views/invitaciones/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Invitación</h2>

        <form action="{{ route('invitacion.store') }}" method="POST">
            @csrf

            <label for="id_cliente">Cliente:</label>
            <select name="id_cliente" id="id_cliente">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                @endforeach
            </select>

            <label for="tipo_reunion">Tipo de Evento:</label>
                <select id="tipo_reunion" name="tipo_reunion" required>
                                <option value="cumpleanio">Cumpleaños</option>
                                <option value="casamiento">Casamiento</option>
                                <option value="aniversario">Aniversario</option>
                                <option value="otro">Otro</option>
                </select>

            <label for="anios">Años:</label>
            <input type="text" name="anios" required>

            <label for="fecha_evento">Fecha del Evento:</label>
            <input type="date" name="fecha_evento" required>

            <label for="hr_inicio">Hora de Inicio:</label>
            <input type="time" name="hr_inicio" required>

            <label for="hr_final">Hora de Finalización:</label>
            <input type="time" name="hr_final" required>

            <label for="tema">Tipo de Evento:</label>
                <select id="tema" name="tema" required>
                                <option value="granja">Granja</option>
                                <option value="casamiento">Casamiento</option>
                                <option value="aniversario">Aniversario</option>
                                <option value="halloween">Halloween</option>
                </select>

            <button type="submit" class="button1">Guardar</button>
        </form>
    </div>
    <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
