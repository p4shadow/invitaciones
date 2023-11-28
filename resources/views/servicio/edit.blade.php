<!-- resources/views/servicios/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Servicio</h1>

    <form method="POST" action="{{ route('servicio.update', $servicio->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="id_cliente">Cliente:</label>
            <select name="id_cliente" id="id_cliente" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $servicio->id_cliente == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo de Evento:</label>
                            <select id="tipo" name="tipo" value="{{ $servicio->tipo }}" class="form-control" required>
                                <option value="cumpleanio">Cumpleaños</option>
                                <option value="casamiento">Casamiento</option>
                                <option value="aniversario">Aniversario</option>
                                <option value="otro">Otro</option>
                            </select>
        </div>

        <div class="form-group">
            <label for="detalle">Detalle:</label>
            <textarea name="detalle" id="detalle" class="form-control">{{ $servicio->detalle }}</textarea>
        </div>

        <div class="form-group">
            <label for="cant_invitados">Cantidad de Invitados:</label>
            <input type="number" name="cant_invitados" id="cant_invitados" class="form-control" value="{{ $servicio->cant_invitados }}">
        </div>

        <div class="form-group">
            <label for="comida">Comida:</label>
            <input type="text" name="comida" id="comida" class="form-control" value="{{ $servicio->comida }}">
        </div>

        <div class="form-group">
            <label for="bebida">Bebida:</label>
            <input type="text" name="bebida" id="bebida" class="form-control" value="{{ $servicio->bebida }}">
        </div>

        <div class="form-group">
            <label for="dj">DJ:</label>
            <input type="text" name="dj" id="dj" class="form-control" value="{{ $servicio->dj }}">
        </div>

        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $servicio->fecha }}">
        </div>

        <div class="form-group">
            <label for="animador">Animador:</label>
            <input type="text" name="animador" id="animador" class="form-control" value="{{ $servicio->animador }}">
        </div>

        <button type="submit" class="button1">Guardar cambios</button>
    </form>
    <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
