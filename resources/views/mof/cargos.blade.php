@extends('layouts.general')

@section('title', 'Cargos')
@section('sub-title', 'Listado de cargos registrados en el MOF')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('MOF') }}">MOF</a></li>
    <li class="active"><a href="#">Cargos</a></li>
@endsection

@section('content')
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Cargos del MOF</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Unidad</th>
                        <th class="col-md-2">Cargo</th>
                        <th class="col-md-5">Función</th>
                        <th class="col-md-2">Opciones</th>
                    </tr>
                    <tbody>
                    @foreach($cargos as $cargo)
                        <tr>
                            <td>{{ ++$c }}</td>
                            <td>{{ $cargo->unidad }}</td>
                            <td>{{ $cargo->nombre }}</td>
                            <td>{{ $cargo->funcion }}</td>
                            <td>
                                <a href="{{ url('MOF/cargos') }}/{{ $cargo->id }}" class="btn btn-success">Editar</a>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div>

    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Registrar nuevo cargo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>A continuación usted puede registrar cargos, y su información respectiva.</p>

                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="unidad">Unidad</label>
                            <input type="text" name="unidad" class="form-control" placeholder="Ejemplo: Gerencia general" />
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" class="form-control" placeholder="Ejemplo: Gerente general" />
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="funcion">Función</label>
                        <input type="text" name="funcion" class="form-control" placeholder="Ingrese una descripción general" />
                    </div>
                </form>
                <button type="submit" class="btn btn-primary pull-right">Registrar cargo</button>
            </div><!-- /.box-body -->
        </div>
@endsection