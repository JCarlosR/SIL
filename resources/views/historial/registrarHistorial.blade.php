@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de historial clínico</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <form action="#">
                            <h3>Datos del paciente</h3>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="txtnombre">Paciente</label>
                                    <input type="text" class="form-control" id="txtnombre" value="{{ $paciente->nombre }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtRUC">Empresa</label>
                                    <input type="text" class="form-control" id="txtRUC" value="{{ $empresa->nombre_comercial }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtDNI">DNI</label>
                                    <input type="text" class="form-control" id="txtDNI" value="{{ $paciente->dni }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="txtNumHijo">Número de hijos</label>
                                    <input type="text" class="form-control" id="txtNumHijo" value="{{ $paciente->numhijos }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtSexo">Sexo</label>
                                    <input type="text" class="form-control" id="txtSexo" value="{{ $paciente->sexo }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtgrupo">Grupo de sangre</label>
                                    <input type="text" class="form-control" id="txtgrupo" value="{{ $paciente->gruposangre }}" readonly>
                                </div>
                            </div>
                            <br>

                            <br>
                            <div class="col-md-offset-3 col-md-6">
                                <table class="table table-hover">
                                    <tr>
                                        <td>Hojas de ruta</td>
                                        <td>Fecha</td>
                                    </tr>

                                    @foreach($ordenes as $orden)
                                        <tr>
                                            <td>HDR-00{{ $orden->id }}</td>
                                            <td>{{ $orden->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <br>
                            <div class="col-md-offset-4 col-md-4">
                                <div class="form-group">
                                    <label for="txtweb">Firma del paciente</label>
                                    <input type="text" class="form-control" id="txtweb" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class=" col-md-6">
                                    <a class="btn btn-primary btn-lg btn-block" href="{{ url('triaje/registrar') }}">Volver</a>
                                </div>
                                <div class=" col-md-6">
                                    <a target="_blank" class="btn btn-warning btn-lg btn-block" href="{{ url('historial/visualizar') }}/{{ $paciente->id }}">Imprimir</a>
                                </div>
                            </div>
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