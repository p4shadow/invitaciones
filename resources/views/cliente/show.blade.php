@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>DNI</th>
            <th>Otro</th>
        </tr>
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td>
            <td>{{ $cliente->tel }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->dni }}</td>
            <td>{{ $cliente->otro }}</td>
        </tr>
    </table>
</div>
<a href="{{ route('welcome') }}" class="button4">Volver al Inicio</a>
@endsection
