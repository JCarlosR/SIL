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
            <form action="{{ url('registrar') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="control-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="ruc" class="control-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Registrar proceso
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-12">
        <!-- Tabla -->
        @if (count($procesos) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de Procesos
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Proceso</th>
                        <th>Descripción</th>
                        <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach ($procesos as $proceso)
                            <tr>
                                <td class="table-text"><div>{{ $proceso->nombre }}</div></td>
                                <td class="table-text"><div>{{ $proceso->descripcion }}</div></td>

                                <td>
                                    <button type="submit" class="btn btn-success" onclick="location.href='../proceso/{{ $proceso->id }}'">
                                        <i class="fa fa-pencil"></i>Editar
                                    </button>

                                    <form action="{{ url('proceso') }}/{{ $proceso->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('scripts')

@endsection