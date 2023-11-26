@extends('layouts.cuerpo')

@section('content')
<h1>Editar Afiliado</h1>

<div class ="row">
    <div class = "col">
        <form action="/empleado/{{$datoAfiliado->id}}" class ="form-control" method="POST">
@csrf
@method('PUT')
<div class="mb-3"> 
  <label for="" class="form-label">Nombre</label> 
  <input type="text" class="form-control" id="nombre" value="{{$datoAfiliado->nombre}}" name ="nombre"> 
</div> 

<div class="mb-3"> 
  <label for="" class="form-label">Apellido</label> 
  <input type="text" class="form-control" id="apellido" value="{{$datoAfiliado->apellido}}" name ="apellido"> 
</div> 
<div class="mb-3"> 
  <label for="" class="form-label">Direccion</label> 
  <input type="text" class="form-control" id="direccion" value="{{$datoAfiliado->direccion}}" name ="direccion"> 
</div> 

<div class="mb-3"> 
    <button type="update" class="btn btn-primary">Guardar</button>
    <a href="/afiliado" class="btn btn-danger">Cancelar</a>
</div>
</form>        
</div>
</div>
@endsection

