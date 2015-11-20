@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de la Hoja de Ruta</h2>
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
                            <div class="col-md-6">
                                <h3>Datos de la Empresa</h3>
                                {{--NO OLVIDAR CAMBIAR LOS NAMES DE LOS INPUT--}}
                                <div class="form-group">
                                    <label for="txtnombre">Nombre Comercial</label>
                                    <input type="text" class="form-control" id="txtnombre" placeholder="Nombre Comercial" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtRUC">RUC</label>
                                    <input type="text" class="form-control" id="txtRUC" placeholder="RUC" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtDireccion">Dirección</label>
                                    <input type="text" class="form-control" id="txtDireccion" placeholder="Dirección" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Datos del Paciente</h3>
                                <div class="form-group">
                                    <label for="txtpaciente">Nombre</label>
                                    <input type="text" class="form-control" id="txtpaciente" placeholder="Nombre" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtNumHijo">Número de hijos</label>
                                    <input type="text" class="form-control" id="txtNumHijo" placeholder="Número de hijos" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtNivelEstudio">Nivel de estudios</label>
                                    <input type="text" class="form-control" id="txtNivelEstudio" placeholder="Nivel de estudios" readonly>
                                </div>
                            </div>
                            <br>
                            <table class="table table-hover">
                                <tr>
                                    <td>Tipo de examen</td>
                                    <td>Medico</td>
                                    <td>Firma</td>
                                </tr>

                                <tr>
                                    <td>Triaje</td>
                                    <td>Edith Bocanegra</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Triaje</td>
                                    <td>Edith Bocanegra</td>
                                    <td></td>
                                </tr>
                            </table>
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
                                    <button id="btnRegistrar" type="submit" class="btn btn-success btn-lg btn-block" >Registrar</button>
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