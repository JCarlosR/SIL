@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro del Triaje</h2>
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
                            <div class="col-md-offset-2 col-md-8">
                                <h3>Datos del Paciente</h3>
                                {{--NO OLVIDAR CAMBIAR LOS NAMES DE LOS INPUT--}}
                                <div class="form-group">
                                    <label for="txtNombre">Paciente</label>
                                    <input type="text" class="form-control" id="txtNombre" placeholder="Juan Perez" readonly>
                                    <button type="button" class="btn btn-primary pull-right" data-buscar>Buscar</button>
                                </div>
                                <div class="form-group">
                                    <label for="txtDNI">Hoja de ruta</label>
                                    <input type="text" class="form-control" id="txtDNI" placeholder="48317532" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtEmpresa">Empresa</label>
                                    <input type="text" class="form-control" id="txtEmpresa" placeholder="SOl de Laredo SA" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtHijos">Número de hijos</label>
                                    <input type="text" class="form-control" id="txtHijos" placeholder="3" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtEstudios">Nivel de estudios</label>
                                    <input type="text" class="form-control" id="txtEstudios" placeholder="Carretera central Km 4" readonly>
                                </div>


                                <h3>Datos del Triaje</h3>
                                <div class="form-group">
                                    <label for="txtPeso">Peso</label>
                                    <input type="text" class="form-control" id="txtweb" placeholder="Peso" >
                                </div>
                                <div class="form-group">
                                    <label for="txtTalla">Talla</label>
                                    <input type="text" class="form-control" id="txtTalla" placeholder="Talla" >
                                </div>
                                <div class="form-group">
                                    <label for="txtPresion">Presión arterial</label>
                                    <input type="text" class="form-control" id="txtPresion" placeholder="Presión arterial" >
                                </div>
                                <div class="form-group">
                                    <label for="txtFrecuencia">Frecuencia arterial</label>
                                    <input type="text" class="form-control" id="txtFrecuencia" placeholder="Frecuencia arterial" >
                                </div>
                            </div>

                            <br>
                            <div class="col-md-offset-2 col-md-8">
                                <div class="pull-left col-md-4">
                                    <button id="btnRegistrarg" type="button" class="btn btn-primary btn-lg btn-block" >Volver</button>
                                </div>
                                <div class="pull-right col-md-8">
                                    <button id="btnRegistrar" type="button" class="btn btn-primary btn-lg btn-block" >Registrar Historial Clínico</button>
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

    <div id="buscarPaciente" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Buscar Hoja de Ruta</h4>
                </div>
                <form action="{{ url('#') }}" method="POST" >
                    <div class="modal-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label for="nombre">Nombre del paciente</label>
                            <input type="text" class="form-control" name="buscado" placeholder="Nuevo nombre del detalle" required/>
                        </div>
                        <table class="table table-hover">
                            <tr>
                                <td>
                                    Hoja de Ruta
                                </td>
                                <td>
                                    Paciente
                                </td>
                                <td>
                                    Acción
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    HDR-001
                                </td>
                                <td>
                                    Edith Carbajal
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary">Elegir</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    HDR-002
                                </td>
                                <td>
                                    Francisco Tadeo
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary">Elegir</button>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <div class="btn-group pull-left">
                            <button class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-backward"></span> Salir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('Triaje/registrarTriaje') }}"></script>
@endsection