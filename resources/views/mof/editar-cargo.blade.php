@extends('layouts.general')

@section('title', 'Edición de cargos')
@section('sub-title', 'Editar un cargo y sus relaciones, atribuciones, funciones y requisitos')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('MOF') }}">MOF</a></li>
    <li><a href="{{ url('MOF/cargos') }}">Cargos</a></li>
    <li class="active"><a href="#">Editar</a></li>
@endsection

@section('content')
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Datos generales del cargo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>Modifique los campos siguientes si desea modificar los datos del cargo seleccionado.</p>
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
                <button type="submit" class="btn btn-primary pull-right">Modificar cargo</button>
            </div><!-- /.box-body -->
        </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Relaciones, atribuciones, funciones y requisitos</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a data-toggle="tab" href="#relaciones">Relaciones</a></li>
                <li><a data-toggle="tab" href="#atribuciones">Atribuciones</a></li>
                <li><a data-toggle="tab" href="#funciones">Funciones</a></li>
                <li><a data-toggle="tab" href="#requisitos">Requisitos</a></li>
            </ul>

            <div class="tab-content">
                <div id="relaciones" class="tab-pane fade in active">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @include('mof.skills.relaciones')
                        </div>
                    </div>
                </div>
                <div id="atribuciones" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{--@include('mof.skills.atribuciones')--}}
                        </div>
                    </div>
                </div>
                <div id="funciones" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{--@include('mof.skills.funciones')--}}
                        </div>
                    </div>
                </div>
                <div id="requisitos" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {{--@include('mof.skills.requisitos')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection