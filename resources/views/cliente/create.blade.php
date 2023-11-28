@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Cliente</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cliente.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" name="apellido" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tel">Teléfono:</label>
                                <input type="text" name="tel" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="direccion">Direccion:</label>
                                <input type="text" name="direccion" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="dni">Dni:</label>
                                <input type="text" name="dni" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="otro">Otro:</label>
                                <input type="text" name="otro" class="form-control" required>
                            </div>

                            <!-- Agrega los demás campos aquí -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
