@extends('layouts.general')

@section('title', 'Procesos de la empresa')
@section('sub-title', 'Edición de procesos de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Procesos de la empresa</a></li>
@endsection

@section('content')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-title">
            <h1>Procesos</h1>
        </div>
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')

                    <!-- New Task Form -->
            <form action="{{ url('proceso') }}/{{ $proceso->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="name" class="control-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $proceso->nombre }}">
                </div>

                <div class="form-group">
                    <label for="ruc" class="control-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" value="{{ $proceso->descripcion }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Editar proceso
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('scripts')

@endsection