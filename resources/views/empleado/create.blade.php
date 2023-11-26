@extends('layouts.cuerpo')

@section('content')
    <h1>Crear Empleado</h1>
    <form action="{{ route('empleado.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('empleado.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection

