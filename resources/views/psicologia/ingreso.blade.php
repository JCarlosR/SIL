@extends('layouts.general')

@section('title', 'Psicología')
@section('sub-title', 'Ingreso de datos en el módulo de psicología')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Psicología</a></li>
@endsection

@section('content')
    <!-- Modal para editar un skill -->
    <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ventana de edición</h4>
                </div>
                <form action="#" id="formEditar" method="POST">
                    <div class="modal-body">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" name="id" value=""/>
                            <div class="form-group">
                                <label for="nombre">Nuevo nombre</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Nueva descripción</label>
                                <input type="text" name="description" class="form-control"/>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Ingreso de resultados - Exámenes psicológicos</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>A continuación usted puede seleccionar un paciente en particular e ingresar sus resultados.</p>

                <form action="">
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <?php
                            $connection =mysqli_connect("localhost","root","","sil");
                            $res=mysqli_query($connection,"select distinct id,nombre_comercial from empresas");
                            echo '<select  id="empresa" name="empresa"  class="form-control">';
                            echo "<option value=''></option>";
                                    while(@$lista=mysqli_fetch_row($res))
                                    {
                                      echo "<option value='".$lista[0]."'>".$lista[1]."</option>";
                                    }
                            echo "</select>";
                        ?>
                    </div>
                    <div id="protocol" class="form-group">
                        <label for="protoc">Protocolo</label>
                        <select id="pro" disabled class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Paciente</th>
                            <th>Historia clínica</th>
                            <th>Hoja de ruta</th>
                            <th>Resultados</th>
                        </tr>
                    </thead>
                    <tbody id="pacientes">
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
        </div>
    </div>

<div class="modal fade" id="registrarResul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form id="formulario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center" style="Color:#2AB7E5;"><b>FICHA DE RESULTADOS</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-4" id="carID">
                        
                  </div>
                  <div class="col-md-4 col-md-offset-4">
                                  <div >Fecha de Aplicación:
                                        <div class='input-group date' id='divMiCalendario' >
                                            <input type='text' name="txtFecha" id="txtFecha" class="form-control"  readonly/>
                                            <span class="input-group-addon" onclick="pick();"><span class="glyphicon glyphicon-calendar" ></span>
                                            </span>
                                        </div>
                                  </div>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-xs-8 col-sm-6">
                    <fieldset><legend>Inteligencia</legend>
                        <div class="row">
                         <div class="col-xs-6">
                            <label for="Esp">Espacial</label>
                          </div>
                          <div class="col-xs-5">
                            <input type="text" name="espacial" class="form-control" placeholder="Puntos"><br>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-xs-6">
                            <label for="Intrape">Intrapersonal</label>
                          </div>
                          <div class="col-xs-5">
                            <input type="text" name="intrapersonal" class="form-control" placeholder="Puntos"><br>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-xs-6">
                            <label for="Intrape">Interpersonal</label>
                          </div>
                          <div class="col-xs-5">
                            <input type="text" name="interpersonal" class="form-control" placeholder="Puntos"><br>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-xs-6">
                            <label for="Intrape">Verbal</label>
                          </div>
                          <div class="col-xs-5">
                            <input type="text" name="verbal" class="form-control" placeholder="Puntos"><br>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-xs-6">
                            <label for="Intrape">Lógico-Matemática</label>
                          </div>
                          <div class="col-xs-5">
                            <input type="text" name="logicoMatematica" class="form-control" placeholder="Puntos"><br>
                         </div>
                        </div>
                        <div class="row">
                         <div class="col-xs-6">
                            <label for="Intrape">Kinestésica</label>
                          </div>
                          <div class="col-xs-5">
                            <input type="text" name="kinestesica" class="form-control" placeholder="Puntos"><br>
                         </div>
                        </div>
                    </fieldset>
                  </div>
                  <div class="col-xs-4 col-sm-6">
                    <fieldset>
                        <legend>Posibilidades de Exito</legend>
                            <div class="form-group">
                                  <label for="comment">Fortaleza:</label>
                                  <textarea class="form-control" name="fortaleza" rows="5" style="resize: none;"></textarea>
                            </div>
                            <div class="form-group">
                                  <label for="comment">Debilidade:</label>
                                  <textarea class="form-control" name="debilidad" rows="5" style="resize: none;"></textarea>
                            </div>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-8 col-sm-6">
                        <div class="form-group">
                                  <label for="comment">Motivación:</label>
                                  <textarea class="form-control" name="motivacion" rows="5" style="resize: none;"></textarea>
                        </div>
                  </div>
                  <div class="col-xs-4 col-sm-6">
                            <div class="form-group">
                                  <label for="comment">Personalidad:</label>
                                  <textarea class="form-control" name="personalidad" rows="5" style="resize: none;"></textarea>
                            </div>
                  </div>
                </div>
                <div class="row">
                    <fieldset>
                      <legend>&nbsp;&nbsp;Observaciones</legend>
                          <div class="col-xs-8 col-sm-6">
                                <div class="form-group">
                                          <label for="comment">Recomendaciones:</label>
                                          <textarea class="form-control" name="recomendaciones" rows="5" style="resize: none;"></textarea>
                                </div>
                          </div>
                          <div class="col-xs-4 col-sm-6">
                                    <div class="form-group">
                                          <label for="comment">Conclusiones:</label>
                                          <textarea class="form-control" name="conclusiones" rows="5" style="resize: none;"></textarea>
                                    </div>
                          </div>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <div align="center">
                    <button class="btn btn-primary" onclick="guardarTest();" data-dismiss="modal">Guardar</button>
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
    <script src="{{ asset('scripts/psicologia/js.js') }}"></script>
    <script src="{{ asset('scripts/psicologia/bootstrap-datetimepicker.es.js') }}"></script>
    <script src="{{ asset('scripts/psicologia/moment.min.js') }}"></script>
    <script src="{{ asset('scripts/psicologia/bootstrap-datetimepicker.min.js') }}"></script>
@endsection