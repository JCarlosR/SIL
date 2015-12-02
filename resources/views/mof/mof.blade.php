@extends('layouts.general')

@section('title', 'MOF')
@section('sub-title', 'Edición del manual de organización y funciones')

@section('styles')
    <style>
    .cursiva {
        font-style: italic;
    }
    </style>
@endsection

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
                @if($errors->has())
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <p>A continuación usted puede modificar los datos generales del MOF.</p>
                <form action="{{ url('MOF') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="finalidad">Finalidad</label>
                        <textarea name="finalidad" class="form-control" rows="4">{{ old('finalidad') ?: $mof->finalidad }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="alcance">Alcance</label>
                        <textarea name="alcance" class="form-control" rows="2">{{ old('alcance') ?: $mof->alcance }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="organigrama">Organigrama</label>
                        @if ($mof->organigrama)
                            <p><a href="{{ url('organigrama') }}" target="_blank">Click para ver el organigrama actual.</a></p>
                            <p>Suba un nuevo archivo solo si desea modificar el actual.</p>
                        @else
                            <p>Usted aún no ha subido ningún archivo.</p>
                        @endif
                        <input type="file" name="organigrama" class="form-control"/>
                        <p class="cursiva">* El organigrama se incluirá en el MOF generado solo si es una imagen.</p>
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
            <a href="{{ url('MOF/cargos') }}" class="btn btn-block btn-success">
                <span class="glyphicon glyphicon-link pull-left"></span>
                Gestionar listado de cargos
            </a>
            <a href="{{ url('MOF/ver/pdf') }}" target="_blank" class="btn btn-block bg-orange">
                <span class="glyphicon glyphicon-new-window pull-left"></span>
                Generar MOF en PDF
            </a>
            <a href="{{ url('MOF/ver/html') }}" target="_blank" class="btn btn-block bg-purple">
                <span class="glyphicon glyphicon-new-window pull-left"></span>
                Visualizar MOF en HTML
            </a>
        </div><!-- /.box-body -->
    </div>
    </div>
@endsection