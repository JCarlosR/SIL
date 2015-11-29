@extends('layouts.general')

@section('title', 'Radiologia')
@section('sub-title', 'Registro de Resulatdos de Pruebas Radiologicas')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Radiologia</a></li>
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
                                <input type="text" name="funcion" class="form-control" placeholder="Apellidos y Nombres" />
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
                        <th>Historial</th>
                        <th>Resultados</th>
                        <th>Paciente</th>
                        <th><p align="left">Seleccion</p></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>HDR58</td>
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
    <div class="col-md-6">
            <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Detalles de Examenes</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form action="">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Examen 1</a></li>
                            <li><a href="#tab2" data-toggle="tab">Examen 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Examen 3</a></li>
                            <li><a href="#tab4" data-toggle="tab">Examen 4</a></li>
                      </ul>
                      <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <label for="comment">Tipo de Radiologia:</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Descripcion:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                  <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                </div>
                                <button class="btn btn-success" align="center">Guardar</button>
                            </div>
                            <div class="tab-pane" id="tab2">
                              <label for="comment">Tipo de Radiologia::</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Descripcion:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                  <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                </div>
                                <button class="btn btn-success" align="center">Guardar</button>
                            </div>
                            <div class="tab-pane" id="tab3">
                              <label for="comment">Tipo de Radiologia::</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Descripcion:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                  <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                </div>
                                <button class="btn btn-success" align="center">Guardar</button>
                            </div>
                            <div class="tab-pane" id="tab4">
                              <label for="comment">Tipo de Radiologia::</label>
                                <input type="text" name="unidad" class="form-control" />
                                <div class="form-group">
                                  <label for="comment">Descripcion:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                  <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                </div>

                                <button class="btn btn-success" align="center">Guardar</button>
                            </div>
                      </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Buscar resultados Anteriores</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
        <label for="comment">Seleccionar un Tipo de Radiologia:</label>
             <select class="selectpicker">
                <option>Mustard</option>
                <option>Ketchup</option>
                <option>Relish</option>
              </select>
        </div><!-- /.box-body -->
    </div>
    </div>
    <div class="col-md-6">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Resultados Anteriores</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
            <div class="box-body">
                <form action="">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Tipo de Radiologia 1</a></li>
                            <li><a href="#tab2" data-toggle="tab">Tipo de Radiologia 2</a></li>
                            <li><a href="#tab3" data-toggle="tab">Tipo de Radiologia 3</a></li>
                            <li><a href="#tab4" data-toggle="tab">Tipo de Radiologia 4</a></li>
                      </ul>
                      <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="form-group">
                                <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />

                                  <label for="comment">Resultado:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <button class="btn btn-success" align="center">Imprimir</button>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="form-group">
                                <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                  <label for="comment">Resultado:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <button class="btn btn-success" align="center">Imprimir</button>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="form-group">
                                <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                  <label for="comment">Resultado:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <button class="btn btn-success" align="center">Imprimir</button>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="form-group">
                                <label for="comment">Codigo de Folder:</label>
                                  <input type="text" name="unidad" class="form-control" />
                                  <label for="comment">Resultado:</label>
                                  <textarea class="form-control" rows="5" id="comment" style="resize: none;"></textarea>
                                </div>
                                <button class="btn btn-success" align="center">Imprimir</button>
                            </div>
                      </div>
                    </div>
                </form>
            </div><!-- /.box-body -->
    </div>
    </div>
@endsection