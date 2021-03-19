@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!<br>
                    <div class="btn-group">
                        <a href="{{ route('estudiante.index') }}" class="btn btn-info" >Ver Estudiantes</a>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('carrera.index') }}" class="btn btn-info" >Ver Carreras</a>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('facultad.index') }}" class="btn btn-info" >Ver facultades</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
