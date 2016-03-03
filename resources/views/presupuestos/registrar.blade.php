@extends('layouts.general')

@section('title', 'Presupuesto por área de la empresa')
@section('sub-title', 'Edición del presupuesto por área de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Presupuesto por área de la empresa</a></li>
@endsection

@section('content')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel-title">
            <h1>Presupuesto por área</h1>
        </div>
        <div class="panel-body">
            <!-- Display Validation Errors -->
            @include('common.errors')

                    <!-- New Task Form -->
            <form action="{{ url('presupuesto/registrar') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="area" class="control-label">Área</label>
                    <select name="area" id="proceso">
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="anual" class="control-label">Año: </label>
                    <input type="number" name="anual" class="form-control" min="2000" step="1">
                </div>

                <div class="form-group">
                    <label for="real" class="control-label">Gasto real: </label>
                    <input type="number" name="real" class="form-control" min="0" step="1">
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
        @if (count($presupuestos) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Diagrama de procesos y operaciones
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Area</th>
                        <th>Año</th>
                        <th>Presupuesto</th>
                        <th>Real</th>
                        <th>Acción</th>
                        </thead>

                        <tbody>
                        @foreach ($presupuestos as $presupuesto)
                            <tr>
                                <td class="table-text"><div>{{ $presupuesto->nombre }}</div></td>
                                <td class="table-text"><div>{{ $presupuesto->anual }}</div></td>
                                <td class="table-text"><div>{{ $presupuesto->presupuesto }}</div></td>
                                <td class="table-text"><div>{{ $presupuesto->real }}</div></td>

                                <td>
                                    <button type="submit" class="btn btn-success" onclick="location.href='../presupuesto/{{ $presupuesto->id }}'">
                                        <i class="fa fa-pencil"></i>Editar
                                    </button>

                                    <form action="{{ url('presupuesto') }}/{{ $presupuesto->id }}" method="POST">
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