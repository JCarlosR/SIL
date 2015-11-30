@extends('layouts.general')

@section('title', 'Radiologia')
@section('sub-title', 'Gestionar Hojas de Ruta')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('radiologia') }}">Radiologia</a></li>
    <li class="active"><a href="#">HojasRuta</a></li>
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
                            <label for="funcion">Ingrese Apellidos y Nombres</label>
                            <input type="text" name="NombreP" class="form-control" placeholder="Apellidos y Nombres" />
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
            <form>
            <div class="box-body">
                <table class="table table-hover">
                    <tr>
                        <th>Codigo</th>
                        <th>Nª Examenes</th>
                        <th>Estado</th>
                        <th>Paciente</th>
                        <th><p align="left">Seleccion</p></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>HDR58</td>
                            <td>5</td>
                            <td>Pendiente</td>
                            <td>Rivera Roman, Eduardo Daniel</td>
                            <td>
                                <div>
                                    &nbsp;&nbsp;<input type="checkbox">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            </form>
        </div>

    <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tipos de Examenes Radiologicos</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form action="">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Radiologia 1</a></li>
                            <li><a href="#tab2" data-toggle="tab">Radiologia 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Radiologia 3</a></li>
                            <li><a href="#tab4" data-toggle="tab">Radiologia 4</a></li>
                      </ul>
                      <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <label for="comment"> Tipo de Radiologia:</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Detalles:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <div>
                                    <div class="checkbox" align="center">
                                    &nbsp;&nbsp;<input type="checkbox">Realizado
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                              <label for="comment">Tipo de Radiologia:</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Detalles:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <div>
                                    <div class="checkbox" align="center">
                                    &nbsp;&nbsp;<input type="checkbox">Realizado
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                              <label for="comment">Tipo de Radiologia:</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Detalles:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <div>
                                    <div class="checkbox" align="center">
                                    &nbsp;&nbsp;<input type="checkbox">Realizado
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                              <label for="comment">Tipo de Radiologia:</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Detalles:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <div>
                                    <div class="checkbox" align="center">
                                    &nbsp;&nbsp;<input type="checkbox">Realizado
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div>
@endsection