@extends('layouts.general')

@section('title', 'Presupuesto por áreas de la empresa')
@section('sub-title', 'Edición de los presupuestos por áreas de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Presupuesto por áreas de la empresa</a></li>
@endsection
@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Presupuesto por áreas</h1>
    </div>
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

                <!-- New Task Form -->
        <form action="{{ url('presupuesto') }}/{{ $presupuesto->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="real" class="control-label">Gasto real: </label>
                <input type="number" name="real" class="form-control" min="0" step="1" value="{{ $presupuesto->real }}">
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