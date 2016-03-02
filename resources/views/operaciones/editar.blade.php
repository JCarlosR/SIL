@extends('layouts.general')

@section('title', 'Procesos de la empresa')
@section('sub-title', 'Edición de procesos de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Diagrama de tiempo de la empresa</a></li>
@endsection
@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Diagrama de tiempos</h1>
    </div>
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

                <!-- New Task Form -->
        <form action="{{ url('operacion') }}/{{ $operacion->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="operacion" class="control-label">Operación: </label>
                <input type="number" name="operacion" class="form-control" min="0" step="0.1" value="{{ $operacion->operacion }}">
            </div>
            <div class="form-group">
                <label for="transporte" class="control-label">Transporte: </label>
                <input type="number" name="transporte" class="form-control" min="0" step="0.1" value="{{ $operacion->transporte }}">
            </div>
            <div class="form-group">
                <label for="inspeccion" class="control-label">Inspección: </label>
                <input type="number" name="inspeccion" class="form-control" min="0" step="0.1" value="{{ $operacion->inspeccion }}">
            </div>
            <div class="form-group">
                <label for="demora" class="control-label">Demora: </label>
                <input type="number" name="demora" class="form-control" min="0" step="0.1" value="{{ $operacion->demora }}">
            </div>
            <div class="form-group">
                <label for="almacenaje" class="control-label">Almacenaje: </label>
                <input type="number" name="almacenaje" class="form-control" min="0" step="0.1" value="{{ $operacion->almacenaje }}">
            </div>
            <div class="form-group">
                <label for="combinada" class="control-label">Combinada: </label>
                <input type="number" name="combinada" class="form-control" min="0" step="0.1" value="{{ $operacion->combinada }}">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i> Editar
                </button>
            </div>
        </form>
    </div>
</div>


@endsection

@section('scripts')

@endsection