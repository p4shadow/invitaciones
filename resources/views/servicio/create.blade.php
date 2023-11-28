@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Servicio</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('servicio.store') }}">
                        @csrf
                       
                        <div class="form-group">
                            <label for="id_cliente">Cliente:</label>
                             <select name="id_cliente" class="form-control" required>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                                @endforeach
                            </select>
                      </div>
                        <label for="tipo">Tipo de Evento:</label>
                            <select id="tipo" name="tipo" required>
                                <option value="cumpleanio">Cumpleaños</option>
                                <option value="casamiento">Casamiento</option>
                                <option value="aniversario">Aniversario</option>
                                <option value="otro">Otro</option>
                            </select>

                        <div class="form-group">
                            <label for="detalle">Detalle:</label>
                            <textarea name="detalle" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="cant_invitados">Cantidad de Invitados:</label>
                            <input type="number" name="cant_invitados" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="comida">Comida:</label>
                            <input type="text" name="comida" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="bebida">Bebida:</label>
                            <input type="text" name="bebida" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="dj">DJ:</label>
                            <input type="text" name="dj" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" name="fecha" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="animador">Animador:</label>
                            <input type="text" name="animador" class="form-control" required>
                        </div>

                        <button type="submit" class="button1">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
