@extends('layouts.general')

@section('title', 'Áreas de la empresa')
@section('sub-title', 'Edición de áreas de la empresa')

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
            <form action="{{ url('area/registrar') }}" method="POST">
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
                    <label for="ruc" class="control-label">Responsable</label>
                    <input type="text" name="responsable" class="form-control">
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
        @if (count($areas) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de Áreas
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Proceso</th>
                        <th>Descripción</th>
                        <th>Responsable</th>
                        <th>Acción</th>
                        </thead>
                        <tbody>
                        @foreach ($areas as $area)
                            <tr>
                                <td class="table-text"><div>{{ $area->nombre }}</div></td>
                                <td class="table-text"><div>{{ $area->descripcion }}</div></td>
                                <td class="table-text"><div>{{ $area->responsable }}</div></td>

                                <td>
                                    <button type="submit" class="btn btn-success" onclick="location.href='../area/{{ $area->id }}'">
                                        <i class="fa fa-pencil"></i>Editar
                                    </button>

                                    <form action="{{ url('area') }}/{{ $area->id }}" method="POST">
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