@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de empresas</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-6">
                        <form>
                            <h3>Datos Principales</h3>
                            <div class="form-group">
                                <label for="txtDNI">Nombre Comercial</label>
                                <input type="text" class="form-control" id="txtDNI" placeholder="DNI">
                            </div>
                            <div class="form-group">
                                <label for="txtDNI">RUC</label>
                                <input type="text" class="form-control" id="txtDNI" placeholder="DNI">
                            </div>
                            <h3>Datos de Contacto</h3>
                            <div class="form-group">
                                <label for="txtweb">Pagina web</label>
                                <input type="text" class="form-control" id="txtweb" placeholder="Página web">
                            </div>
                            <div class="form-group">
                                <label for="txtc1">Numero de Contacto 1</label>
                                <input type="text" class="form-control" id="txtc1" placeholder="Contacto 1">
                            </div>
                            <div class="form-group">
                                <label for="txtc2">Numero de Contacto 2</label>
                                <input type="text" class="form-control" id="txtc2" placeholder="Contacto 2">
                            </div>
                            <br>
                            <button id="btnRegistrar" type="button" class="btn btn-primary btn-lg btn-block"  onclick="location.href='index.php'">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            Lezama Consultores
        </div><!-- /.box-footer-->
    </div>

@endsection