@extends('layouts.cuerpo')

@section('content')
<h1>Empleados Existentes</h1>
<a href="{{ route('empleado.create') }}" class="btn btn-success">Crear</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th><a href="/afiliado/{{$empleado->id}}">Afiliados</a></th>
            <td>
                <form action="/empleados/{{{$empleado->id}}}" method="post">
                    @csrf
                    <a href="{{ route('empleado.edit', $empleado->id) }}" class="btn btn-primary">Editar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection