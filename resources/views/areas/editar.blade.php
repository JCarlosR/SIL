@extends('layouts.general')

@section('title', 'Áreas de la empresa')
@section('sub-title', 'Edición de areas de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Áreas de la empresa</a></li>
@endsection

@section('content')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-title">
            <h1>Áreas</h1>
        </div>
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')

                    <!-- New Task Form -->
            <form action="{{ url('area') }}/{{ $area->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="name" class="control-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $area->nombre }}">
                </div>

                <div class="form-group">
                    <label for="ruc" class="control-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" value="{{ $area->descripcion }}">
                </div>

                <div class="form-group">
                    <label for="ruc" class="control-label">Responsable</label>
                    <input type="text" name="responsable" class="form-control" value="{{ $area->responsable }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Editar área
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection

@section('scripts')

@endsection