@extends('Plantillas.principalsimple')

@section('contenido')

<title>Formulario de Registro</title>


<div class="solv">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Formulario registro usuario: {{\Auth::user()->name}}</div>
        <div class="panel-body">
          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

    <h2> Datos Personales</h2>

    <form class="form-horizontal" role="form" method="POST" action="{{ route('registrarseperson') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group col-xs-12 col-sm-6">
      <label class="col-sm-2 control-label">Nombre</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" value="{{$persona_new->nombre }}" placeholder="Nombre">
     </div>
  </div>

  {{-- value=@{{ $persona_new->Nombre  }} --}}
 

  <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Segundo Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="segundo_nombre" value="{{$persona_new->segundo_nombre }}" placeholder="Segundo Nombre">
    </div>
  </div>

<div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Primer Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="apellido" value="{{$persona_new->apellido}}" placeholder="Apellido">
    </div>
  </div>

  <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Segundo Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="segundo_apellido" value="{{$persona_new->segundo_apellido}}" placeholder="Segundo Apellido">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Cedula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cedula" value="{{$persona_new->cedula}}">
    </div>
  </div>

   <div class="form-group col-sm-6">
    <label class="col-sm-2 control-label">Estado Civil</label>
    <div class="col-sm-10">
      <select type="text" name="estado_civil" class="form-control">
      	<option value="null">Seleccione</option>
    <option value="casado">Casado(a)</option>
 		<option value="soltero">Soltero(a)</option>
      </select>
    </div>
  </div>

  <div class="form-group col-sm-4">
    <label class="col-sm-4 control-label">Cargas Familiares</label>
    <div class="col-sm-8">
      <select name="cargas_fami" class="form-control">
      	<option value="null">Seleccione</option>
  		<option>0</option>
 		<option>1</option>
 		<option>2</option>
 		<option>3</option>
 		<option>+3</option>
  	  </select>
    </div>
  </div>



  <div class="form-group col-sm-4">
    <label class="col-sm-4 control-label">Sexo</label>
    <div class="col-sm-8">
      <select type="text" name="sexo" class="form-control" placeholder="Seleccione">
      	<option value="null">Seleccione</option>
  		<option value="masculino">Masculino</option>
 		<option value="femenino">Femenino</option>
  	  </select>
    </div>
  </div>

   <div class="form-group col-sm-5">
    <label for="Nacionalidad" class="col-sm-6 control-label">Nacionalidad</label>
    <div class="col-sm-4">
      <input class="form-control" name="nacionalidad" value="{{$persona_new->nacionalidad}}" disabled="">
    </div>
  </div>






  <div class="form-group col-sm-12">
    <label for="Direccion" class="col-sm-6 control-label">Direccion</label>
    <div class="col-sm-12">
      <input type="text" name="direccion" class="form-control" name="direccion" value="{{$persona_new->direccion}}" rows="3"></input> 
    </div>
  </div>


 <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">
                  Ir a paso 2
                </button>
              </div>
          </div>

  </form>
  </div>

      </div>
     </div>
    </div>
  </div>

  </div>

  @endsection