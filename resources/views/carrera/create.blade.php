@extends('layouts.layoutapp')
@section('content')
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nueva Carrera</h3>
				</div>
				<div class="panel-body">
					<div class="table-container">
						<form method="POST" action="{{ route('carrera.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="number" name="codigo" id="codigo" class="form-control input-sm" placeholder="Codigo de carrera" required>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="nombre_carrera" id="nombre_carrera" class="form-control input-sm" placeholder="Nombre de la carrera" required>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
										<input type="text" name="idfacultad" id="idfacultad" class="form-control input-sm" placeholder="Facultad" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('carrera.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
