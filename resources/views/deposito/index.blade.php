Codigo empleado {{$empleado}}
Codigo afiliado {{$afiliado}}
Nombre afiliado {{$nombre}}
<h1>Depositos Existentes</h1>
<a href="/deposito/create/{{$empleado}}/{{$afiliado}}/{{$nombre}}" class="btn btn-success">Crear</a>




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
        @foreach ($depositos as $deposito)
        <tr>
        <th>{{$deposito->id}}</th>
        <th>{{$deposito->idempleado}}</th>
        <th>{{$deposito->idafiliado}}</th>
        <th>{{$deposito->nombreafiliado}}</th>
        <th>{{$deposito->fecha}}</th>
        <th>{{$deposito->cantidad}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
