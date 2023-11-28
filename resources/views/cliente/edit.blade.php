@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Cliente</h2>

        <form method="post" action="{{ route('cliente.update', $cliente->id) }}">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required>
            </div>

            <div class="form-group">
                <label for="tel">Teléfono</label>
                <input type="text" class="form-control" id="tel" name="tel" value="{{ $cliente->tel }}" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->direccion }}" required>
            </div>

            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ $cliente->dni }}" required>
            </div>

            <div class="form-group">
                <label for="otro">Otro</label>
                <input type="text" class="form-control" id="otro" name="otro" value="{{ $cliente->otro }}">
            </div>

            <button type="submit" class="button1">Guardar cambios</button>
        </form>
    </div>
    <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection