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

                        <form action="{{ url('triaje/registrar') }}" id="formRegistraTriaje" method="POST">
                            <div class="col-md-offset-2 col-md-8">
                                <h3>Datos del Paciente</h3>
                                {{--NO OLVIDAR CAMBIAR LOS NAMES DE LOS INPUT--}}
                                {{ csrf_field() }}

                                <input type="hidden" class="form-control" name="paciente_id">
                                <input type="hidden" class="form-control" name="hojaruta_id" value="1">
                                <input type="hidden" class="form-control" name="protocolo_id" value="1">
                                <input type="hidden" class="form-control" name="orden_id" value="1">


                                <div class="form-group">
                                    <label for="nombre">Paciente</label>
                                    <input type="text" class="form-control" name="nombre" required readonly>
                                    <button type="button" class="btn btn-primary pull-right" data-buscar>Buscar</button>
                                </div>
                                <div class="form-group">
                                    <label for="txtDNI">Hoja de ruta</label>
                                    <input type="text" class="form-control" name="txtHoja" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtEmpresa">Empresa</label>
                                    <input type="text" class="form-control" name="txtEmpresa" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtHijos">Número de hijos</label>
                                    <input type="text" class="form-control" name="txtHijos" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtEstudios">Nivel de estudios</label>
                                    <input type="text" class="form-control" name="txtEstudios" readonly>
                                </div>

                                <h3>Datos del Triaje</h3>
                                <div class="form-group">
                                    <label for="peso">Peso</label>
                                    <input type="text" class="form-control" name="peso" placeholder="Peso" >
                                </div>
                                <div class="form-group">
                                    <label for="talla">Talla</label>
                                    <input type="text" class="form-control" name="talla" placeholder="Talla" >
                                </div>
                                <div class="form-group">
                                    <label for="presion_arterial">Presión arterial</label>
                                    <input type="text" class="form-control" name="presion_arterial" placeholder="Presión arterial" >
                                </div>
                                <div class="form-group">
                                    <label for="frecuencia_cardiaca">Frecuencia arterial</label>
                                    <input type="text" class="form-control" name="frecuencia_cardiaca" placeholder="Frecuencia arterial" >
                                </div>
                            </div>

                            <br>

                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar Historial Clínico</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                            <input type="text" class="form-control" name="buscado" placeholder="Nombre del paciente a buscar" required/>
                        </div>
                        <table class="table table-hover">
                            <thead>
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
                            </thead>

                            <tbody>
                                <template id="template-fila">
                                    <tr>
                                        <td data-hoja>
                                            HDR-001
                                        </td>
                                        <td data-paciente>
                                            Edith Carbajal
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-id="">Elegir</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
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
    <script src="{{ asset('scripts/triaje/registrarTriaje.js') }}"></script>
@endsection