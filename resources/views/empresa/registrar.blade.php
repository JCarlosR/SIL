@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', 'Formulario para registrar una nueva empresa')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registrar nueva empresa</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
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
                        <form action="{{ url('empresa/registrar') }}" method="POST">
                            {{ csrf_field() }}
                            <h3>Datos principales</h3>
                            <div class="form-group">
                                <label for="nombre_comercial">Nombre comercial</label>
                                <input type="text" class="form-control" name="nombre_comercial" placeholder="Nombre comercial">
                            </div>
                            <div class="form-group">
                                <label for="ruc">RUC</label>
                                <input type="text" class="form-control" name="ruc" placeholder="RUC">
                            </div>
                            <h3>Datos de contacto</h3>
                            <div class="form-group">
                                <label for="web">Página web</label>
                                <input type="text" class="form-control" name="web" placeholder="Página web">
                            </div>
                            <div class="form-group">
                                <label for="contacto1">Número de contacto 1</label>
                                <input type="text" class="form-control" name="contacto1" placeholder="Contacto 1">
                            </div>
                            <div class="form-group">
                                <label for="contacto2">Número de contacto 2</label>
                                <input type="text" class="form-control" name="contacto2" placeholder="Contacto 2">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection