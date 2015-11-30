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
    @include('mof.modals.relaciones')
    @include('mof.modals.atribuciones')
    @include('mof.modals.funciones')
    @include('mof.modals.requisitos')

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Datos generales del cargo</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @if (session('notif'))
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Éxito!</strong> {{ session('notif') }}
            </div>
            @endif
            <p>Modifique los campos siguientes si desea modificar los datos del cargo seleccionado.</p>
            <form action="" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="unidad">Unidad</label>
                        <input type="text" name="unidad" class="form-control" value="{{ old('unidad') ?: $cargo->unidad }}" placeholder="Ejemplo: Gerencia general" />
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') ?: $cargo->nombre }}" placeholder="Ejemplo: Gerente general" />
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="funcion">Función</label>
                    <input type="text" name="funcion" class="form-control" value="{{ old('funcion') ?: $cargo->funcion }}" placeholder="Ingrese una descripción general" />
                </div>
                <button type="submit" class="btn btn-primary pull-right">Modificar cargo</button>
            </form>
        </div><!-- /.box-body -->
    </div>

    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

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
                            @include('mof.tabs.relaciones')
                        </div>
                    </div>
                </div>
                <div id="atribuciones" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @include('mof.tabs.atribuciones')
                        </div>
                    </div>
                </div>
                <div id="funciones" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @include('mof.tabs.funciones')
                        </div>
                    </div>
                </div>
                <div id="requisitos" class="tab-pane fade">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @include('mof.tabs.requisitos')
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/mof/templates.js') }}"></script>
@endsection