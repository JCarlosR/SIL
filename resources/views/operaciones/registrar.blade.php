@extends('layouts.general')

@section('title', 'Diagrama de tiempos de la empresa')
@section('sub-title', 'Edición del diagrama de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Procesos y diagrama de tiempos</a></li>
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
            <form action="{{ url('registrarOperacion') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="proceso" class="control-label">Nombre</label>
                    <select name="proceso" id="proceso">
                        @foreach($procesos as $proceso)
                            <option value="{{ $proceso->id }}">{{ $proceso->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="operacion" class="control-label">Operación: </label>
                    <input type="number" name="operacion" class="form-control" min="0" step="0.1">
                </div>
                <div class="form-group">
                    <label for="transporte" class="control-label">Transporte: </label>
                    <input type="number" name="transporte" class="form-control" min="0" step="0.1">
                </div>
                <div class="form-group">
                    <label for="inspeccion" class="control-label">Inspección: </label>
                    <input type="number" name="inspeccion" class="form-control" min="0" step="0.1">
                </div>
                <div class="form-group">
                    <label for="demora" class="control-label">Demora: </label>
                    <input type="number" name="demora" class="form-control" min="0" step="0.1">
                </div>
                <div class="form-group">
                    <label for="almacenaje" class="control-label">Almacenaje: </label>
                    <input type="number" name="almacenaje" class="form-control" min="0" step="0.1">
                </div>
                <div class="form-group">
                    <label for="combinada" class="control-label">Combinada: </label>
                    <input type="number" name="combinada" class="form-control" min="0" step="0.1">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Registrar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-12">
        <!-- Tabla -->
        @if (count($operaciones) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Diagrama de procesos y operaciones
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Proceso</th>
                        <th>Operación</th>
                        <th>Transporte</th>
                        <th>Inspección</th>
                        <th>Demora</th>
                        <th>Almacenaje</th>
                        <th>Combinada</th>
                        <th>Acción</th>
                        </thead>

                        <tbody>
                        @foreach ($operaciones as $operacion)
                            <tr>
                                <td class="table-text"><div>{{ $operacion->nombre}}</div></td>
                                <td class="table-text"><div>{{ $operacion->operacion }}</div></td>
                                <td class="table-text"><div>{{ $operacion->transporte }}</div></td>
                                <td class="table-text"><div>{{ $operacion->inspeccion }}</div></td>
                                <td class="table-text"><div>{{ $operacion->demora }}</div></td>
                                <td class="table-text"><div>{{ $operacion->almacenaje }}</div></td>
                                <td class="table-text"><div>{{ $operacion->combinada }}</div></td>

                                <td>
                                    <button type="submit" class="btn btn-success" onclick="location.href='../operacion/{{ $operacion->id }}'">
                                        <i class="fa fa-pencil"></i>Editar
                                    </button>

                                    <form action="{{ url('operacion') }}/{{ $operacion->id }}" method="POST">
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