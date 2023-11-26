Codigo empleado {{$empleado}}
Codigo afiliado {{$afiliado}}
Nombre afiliado {{$nombre}}
<h1>Retiros Existentes</h1>
<a href="/retiro/create/{{$empleado}}/{{$afiliado}}/{{$nombre}}" class="btn btn-success">Crear</a>




<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Idempleado</th>
        <th>IdAfiliado</th>
        <th>Nombre Afiliado</th>
        <th>Fecha</th>
        <th>Cantidad</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($retiros as $retiro)
        <tr>
        <th>{{$retiro->id}}</th>
        <th>{{$retiro->idempleado}}</th>
        <th>{{$retiro->idafiliado}}</th>
        <th>{{$retiro->nombreafiliado}}</th>
        <th>{{$retiro->fecha}}</th>
        <th>{{$retiro->cantidad}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
