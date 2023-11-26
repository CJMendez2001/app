@extends('layouts.cuerpo')

@section('content')
<h1>Editar empleado</h1>

<div class ="row">
    <div class = "col">
        <form action="/empleado/{{$datoEmpleado->id}}" class ="form-control" method="POST">
@csrf
@method('PUT')
<div class="mb-3"> 
  <label for="" class="form-label">Nombre</label> 
  <input type="text" class="form-control" id="nombre" value="{{$datoEmpleado->nombre}}" name ="nombre"> 
</div> 

<div class="mb-3"> 
  <label for="" class="form-label">Apellido</label> 
  <input type="text" class="form-control" id="apellido" value="{{$datoEmpleado->apellido}}" name ="apellido"> 
</div> 

<div class="mb-3"> 
    <button type="update" class="btn btn-primary">Guardar</button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>
</div>
</form>        
</div>
</div>
@endsection
