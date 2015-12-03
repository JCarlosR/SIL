@extends('layouts.general')

@section('title', 'Examenes Especiales')
@section('sub-title', 'Consultor de Examenes Especiales')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examenes Especiales</a></li>
@endsection

@section('content')
    <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Buscar Paciente</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                        <div class="form-group">
                            <label for="funcion">Ingrese el DNI del paciente</label>
                            <input  id="buscar" type="text" name="NombreP" class="form-control" placeholder="DNI" /><br>
                            <input type="button" onclick="cargaPaciente(buscar.value);" class="btn btn-primary" value="Buscar">
                        </div>
                </div><!-- /.box-body -->
    </div>
    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Resultados de Busquedad</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="form-group" align="center" id="resuPaciente">
            </div>
            <form>
            <div  class="box-body">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Nombre de Examen</th>
                        <th>Fecha de Examen</th>
                        <th>Estado</th>
                        <th><p align="center">Resultados</p></th>
                    </tr>
                    <tbody id="resultado" >
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            </form>
        </div>
<div class="modal fade" id="registrarResul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formulario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center"><b><div id="examen"></div></b></h4>
            </div>
            <div class="modal-body">
                <fieldset>
                        <legend>Diagnostico</legend>
                            <div class="form-group">
                                  <textarea class="form-control" id="diagnostico" rows="5" style="resize: none;"></textarea>
                            </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <div align="center">
                    <button class="btn btn-primary" onclick="guardar(diagnostico.value);" data-dismiss="modal">Guardar</button>
                    <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <div id="C">
                </div>
            </div>
        </div>
    </div>
</form>
</div>

<div class="modal fade" id="MostrarResul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formulario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center"><b><div id="examenR"></div></b></h4>
            </div>
            <div class="modal-body">
                <fieldset>
                        <legend>Diagnostico Registrado</legend>
                            <div class="form-group" id="diagnosticoRegistrado">
                                  <textarea class="form-control" id="diagnosticoR" rows="5" style="resize: none;" readonly></textarea>
                            </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <div align="center">
                    <button class="btn btn-primary" onclick="" data-dismiss="modal">Imprimir</button>
                    <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <div id="C">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
    
@endsection

@section('scripts')
    <script src="{{ asset('worker-profile/js/index.js') }}"></script>
    <script src="{{ asset('scripts/examenesEspeciales/js.js') }}"></script>
@endsection