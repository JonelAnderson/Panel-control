@extends('layouts.layoutapp')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de Estudiantes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('estudiante.create') }}" class="btn btn-info" >Registrar Estudiante</a>
            </div>
            <div class="btn-group">
              <a href="{{ route('carrera.index') }}" class="btn btn-info" >Ver Carreras</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
                <th>Código</th>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th>Correo</th>
               <th>Carrera</th>
               <th>facultad</th>
               <th>Editar</th>
               <th>Eiminar</th>
             </thead>
             <tbody>
              @if($estudiantes->count())
              @foreach($estudiantes as $estud)
              <tr>
                <td>{{$estud->codigo}}</td>
                <td>{{$estud->nombre_estudiante}}</td>
                <td>{{$estud->apellido}}</td>
                <td>{{$estud->correo}}</td>
                <td>{{$estud->carrera->nombre_carrera}}</td>
                <td>{{$estud->carrera->facultad->nombre_facultad}}</td>
                <td>
                <a class="btn btn-primary btn-xs" href="{{action('EstudianteController@edit', $estud->id)}}" ><span class="glyphicon glyphicon-pencil">editar</span></a>
                </td>
                <td>
                  <form action="{{action('EstudianteController@destroy', $estud->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">eliminar</span></button>
                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      {{ $estudiantes->links() }}
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
        </div>
	</div>
  </div>
</section>

@endsection
