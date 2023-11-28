@extends('layouts.app')

@section('content')
    <h1>Edit Invitacion</h1>

    <form method="POST" action="{{ route('invitacion.update', $invitacion->id) }}">
        @csrf
        @method('PUT')

        <label for="id_cliente">Cliente:</label>
        <select name="id_cliente" id="id_cliente">
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $cliente->id === $invitacion->id_cliente ? 'selected' : '' }}>
                    {{ $cliente->nombre }} {{ $cliente->apellido }}
                </option>
            @endforeach
        </select>

        <label for="tipo_reunion">Tipo de Reunion:</label>
        <select id="tipo_reunion" name="tipo_reunion" value="{{ $invitacion->tipo_reunion }}" class="form-control" required>
            <option value="cumpleanio">Cumpleaños</option>
            <option value="casamiento">Casamiento</option>
            <option value="aniversario">Aniversario</option>
            <option value="otro">Otro</option>
        </select>

        <label for="anios">Años:</label>
        <input type="text" name="anios" value="{{ $invitacion->anios }}">

        <label for="fecha_evento">Fecha del Evento:</label>
        <input type="date" name="fecha_evento" value="{{ $invitacion->fecha_evento }}">

        <label for="hr_inicio">Hora de Inicio:</label>
        <input type="time" name="hr_inicio" value="{{ \Carbon\Carbon::parse($invitacion->hr_inicio)->format('H:i') }}" required>

        <label for="hr_final">Hora de Finalización:</label>
        <input type="time" name="hr_final" value="{{ \Carbon\Carbon::parse($invitacion->hr_final)->format('H:i') }}" required>

        <label for="tema">Tema:</label>
        <select id="tema" name="tema" value="{{ $invitacion->tema }}" class="form-control" required>
            <option value="granja">Granja</option>
            <option value="casamiento">Casamiento</option>
            <option value="aniversario">Aniversario</option>
            <option value="halloween">Halloween</option>
        </select>
        <!-- Agrega otros campos de la invitación según sea necesario -->

        <button type="submit" class="button1">Actualizar</button>
    </form>
    <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
