@extends('layouts.cuerpo')

@section('content')
<h1>Crear Transaccion</h1>
    <form action="{{ route('transaccion.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idafiliado" class="select">Nombre</label>
            <input type="option" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('transaccion.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection