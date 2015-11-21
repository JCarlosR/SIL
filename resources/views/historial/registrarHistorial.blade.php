@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro del Historial CLínico</h2>
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
                            <h3>Datos del Paciente</h3>
                            <div class="col-md-6">
                                {{--NO OLVIDAR CAMBIAR LOS NAMES DE LOS INPUT--}}
                                <div class="form-group">
                                    <label for="txtnombre">Paciente</label>
                                    <input type="text" class="form-control" id="txtnombre" value="{{ $paciente->nombre }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtRUC">Empresa</label>
                                    <input type="text" class="form-control" id="txtRUC" value="{{ $empresa->nombre_comercial }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtDireccion">DNI</label>
                                    <input type="text" class="form-control" id="txtDireccion" value="{{ $paciente->dni }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtDireccion">Estado Civil</label>
                                    <input type="text" class="form-control" id="txtDireccion" value="Aoltero(a)" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="txtpaciente">Número de hijos</label>
                                    <input type="text" class="form-control" id="txtpaciente" value="2" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtNumHijo">Sexo</label>
                                    <input type="text" class="form-control" id="txtNumHijo" value="Masculino" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtNivelEstudio">Grupo de sangre</label>
                                    <input type="text" class="form-control" id="txtNivelEstudio" value="B-" readonly>
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

                                    <tr>
                                        <td><a href="">HDR-001</a></td>
                                        <td>15/11/2015</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><a href="">HDR-002</a></td>
                                        <td>10/11/2014</td>
                                        <td></td>
                                    </tr>
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
                                <div class=" col-md-4">
                                    <button id="btnRegistrar" type="button" class="btn btn-primary btn-lg btn-block" >Volver</button>
                                </div>
                                <div class=" col-md-4">
                                    <button id="btnRegistrar" type="button" class="btn btn-warning btn-lg btn-block" >Imprimir</button>
                                </div>
                                <div class=" col-md-4">
                                    <a href="{{ url('panel') }}" class="btn btn-success btn-lg btn-block" >Registrar</a>
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