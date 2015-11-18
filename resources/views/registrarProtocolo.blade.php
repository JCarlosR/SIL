@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de protocolo</h2>
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
                            <div class="form-group">
                                <h3>Empresa</h3>
                                <select class="form-control">
                                    <option>Seagro SAC</option>
                                    <option>Laredo EIRL</option>
                                    <option>Empresa 3</option>
                                    <option>Empresa 4</option>
                                    <option>Empresa 5</option>
                                </select>
                                <br>
                                <button id="btnNueva" type="button" class="btn btn-primary" onclick="location.href= '{{url('registrarEmpresa')}}' ">Nueva</button>
                            </div>
                            <h3>Trabajador</h3>
                            <div class="form-group">
                                <label for="txtDNI">DNI</label>
                                <input type="text" class="form-control" id="txtDNI" placeholder="DNI">
                            </div>
                            <div class="form-group">
                                <label for="txtNombre">Nombre</label>
                                <input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
                            </div>
                            <label for="txtPerfil">Perfil</label>
                            <select class="form-control">
                                <option>Trabajador en Oficina</option>
                                <option>Trabajador en Planta</option>
                            </select>
                            <br>
                            <button id="btnRegistrar" type="button" class="btn btn-primary btn-lg btn-block" >Continuar Registro</button>
                        </form>
                        <br>
                    </div>

                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            Lezama Consultores
        </div><!-- /.box-footer-->
    </div>

@endsection