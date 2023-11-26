@extends('layouts.cuerpo')

@section('content')

Codigo del empleado {{$empleados}}
<h1>Afiliados Existentes</h1>
<a href="/afiliado/create/{{$empleados}}" class="btn btn-success">Crear</a>



<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($afiliados as $afiliado)
        <tr>
            <td>{{$afiliado->id}}</td>
            <td>{{$afiliado->nombre}}</td>
            <td>{{$afiliado->apellido}}</td>
            <td>{{$afiliado->direccion}}</td>
            <td>
                <form action="/afiliado/{{{$afiliado->id}}}" method="post">
                    @csrf
                    <a href="/afiliado/edit/{{$empleados}}" class="btn btn-primary">Editar</a>
                </form>
                <td><a href="/deposito/{{$empleados}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Deposito</a></td>
                <td><a href="/retiro/{{$empleados}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Retiro</a></td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
