@extends('layouts.general')

@section('title', 'Laboratorio')
@section('sub-title', 'Registro de Resultados de Analisis')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Laboratorio</a></li>
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
                                <input  id="buscar" type="text" name="funcion" class="form-control" placeholder="Apellidos y Nombres" />
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
                    <tbody id="resultado">
                        <tr>
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
                    <div id="result" class="tabbable"> <!-- Only required for left/right tabs -->
                      <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Analisis 1</a></li>
                      </ul>
                      <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <label for="comment">Tipo de Analisis:</label>
                                <input type="text" name="unidad" class="form-control" readonly/>
                                <div class="form-group">
                                  <label for="comment">Resultado:</label>
                                  <textarea class="form-control" rows="5" id="comment" readonly style="resize: none;"></textarea>
                                </div>
                                <button disabled class="btn btn-success" align="center">Guardar</button>
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
        <label for="comment">Seleccionar un Tipo de Analisis:</label>
            <?php
                $connection =mysqli_connect("localhost","root","","lezama");
                $res=mysqli_query($connection,"select distinct tipoAnalisis from resultadoslaboratorio");
                echo '<select disabled id="selector" class="selectpicker"">';
                echo "<option>Seleccione....</option>";
                        while(@$lista=mysqli_fetch_row($res))
                        {
                          echo "<option>".$lista[0]."</option>";
                        }
                echo "</select>";
            ?>
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
                    <div id="imprime" class="tabbable"> <!-- Only required for left/right tabs -->
                    </div>
                </form>
            </div><!-- /.box-body -->
    </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('scripts/laboratorio/resgistrar.js') }}"></script>
@endsection