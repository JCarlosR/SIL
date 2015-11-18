@extends('layouts.general')

@section('title', 'MOF')
@section('sub-title', 'Edición del manual de organización y funciones')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">MOF</a></li>
@endsection

@section('content')
    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Manual de organización y funciones</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>A continuación usted puede modificar los datos generales del MOF.</p>

                <form action="">
                    <div class="form-group">
                        <label for="finalidad">Finalidad</label>
                        <input type="text" name="finalidad" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="alcance">Alcance</label>
                        <input type="text" name="alcance" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="organigrama">Imagen del organigrama</label>
                        <input type="file" name="organigrama" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>
                </form>
            </div><!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Cargos en el MOF</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <p>Desde el siguiente enlace usted puede consultar los cargos registrados en el MOF.</p>
            <a href="{{ url('MOF/cargos') }}" class="btn btn-success pull-right">
                <span class="glyphicon glyphicon-link"></span>
                Listado de cargos
            </a>
        </div><!-- /.box-body -->
    </div>
    </div>
@endsection