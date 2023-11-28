@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Sistema de Registro del Automotor</h2>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5></h5>
                    <p class="card-text">Administra la información de los clientes.</p>
                    <a href="cliente" class="button1">Ir a Clientes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Servicios</h5>
                    <p class="card-text">Gestiona la información de los Servicios registrados.</p>
                    <a href="servicio" class="button2">Ir a Servicios</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Invitaciones</h5>
                    <p class="card-text">Registra y visualiza las invitaciones.</p>
                    <a href="invitacion" class="button3">Ir a Infracciones</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap y otros scripts personalizados si es necesario -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
