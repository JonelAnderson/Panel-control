@extends('layouts.layoutapp')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Carreras</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('carrera.create') }}" class="btn btn-info" >Registrar Carrera</a>
            </div>
            <div class="btn-group">
              <a href="{{ route('estudiante.index') }}" class="btn btn-info" >Ver Estudiantes</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Código</th>
               <th>Nombre</th>
               <th>Facultad</th>
               <th>Editar</th>
               <th>Eiminar</th>
             </thead>
             <tbody>
              @if($carreras->count())
              @foreach($carreras as $car)
              <tr>
                <td>{{$car->codigo}}</td>
                <td>{{$car->nombre_carrera}}</td>
                <td>{{$car->facultad->nombre_facultad}}</td>
                <td>
                <a class="btn btn-primary btn-xs" href="{{action('CarreraController@edit', $car->id)}}" ><span class="glyphicon glyphicon-pencil">editar</span></a>
                </td>
                <td>
                  <form action="{{action('CarreraController@destroy', $car->id)}}" method="post">
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
      {{ $carreras->links() }}
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a href="{{ route('home') }}" class="btn btn-info btn-block" >Atrás</a>
        </div>
	</div>
  </div>
</section>

@endsection
