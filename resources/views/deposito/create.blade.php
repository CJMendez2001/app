@extends('layouts.cuerpo')

@section('content')
    <h1>Crear Depósito</h1>
    <form action="{{ route('deposito.store') }}" method="POST">
        @csrf
        <input type="text" name="idempleado" value="{{ $empleados }}" readonly>
        <input type="text" name="idafiliado" value="{{ $afiliados }}" readonly>
        <input type="text" name="nombreafiliado" value="{{ $nombre }}"readonly>
        
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad">
        </div>  
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('empleado.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
@endsection
