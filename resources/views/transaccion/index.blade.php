@extends('layouts.cuerpo')

@section('content')
<h1>Transacciones Existentes</h1>
<a href="{{ route('transaccion.create') }}" class="btn btn-success">Crear</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>IdAfiliado</th>
        <th>IdEmpleado</th>
        <th>Nombre Afiliado</th>
        <th>Tipo Transaccion</th>
        <th>Fecha</th>
        <th>Cantidad</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($transaccions as $transaccion)
        <tr>
            <th>{{$transaccion->id}}</th>
            <th>{{$transaccion->idafiliado}}</th>
            <th>{{$transaccion->idempleado}}</th>
            <th>{{$transaccion->nombreafiliado}}</th>
            <th>{{$transaccion->tipoT}}</th>
            <th>{{$transaccion->date}}</th>
            <th>{{$transaccion->cantidad}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection 