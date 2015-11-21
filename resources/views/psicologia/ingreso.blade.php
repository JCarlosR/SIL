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
                        <select name="empresa" class="form-control" required>
                            <option value=""></option>
                            <option value="1">CHIMU AGROPECUARIA S.A.C.</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="protocolo">Protocolo</label>
                        <select name="protocolo" class="form-control" required>
                            <option value=""></option>
                            <option value="1">Procolo CHIMUAGRO 001</option>
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
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Marcos Botton</td>
                        <td>HC00321</td>
                        <td>HR002</td>
                        <td>
                            <a href="#" class="btn btn-success">Ingresar resultados</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jose Garrido</td>
                        <td>HC00322</td>
                        <td>HR001</td>
                        <td>
                            <a href="#" class="btn btn-success">Ingresar resultados</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Eduardo Rivera</td>
                        <td>HC00249</td>
                        <td>HR001</td>
                        <td>
                            <a href="#" class="btn btn-success">Ingresar resultados</a>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <form action="">
                    <a href="{{ url('perfil-trabajador/ver') }}" class="btn btn-block btn-primary">
                        <span class="glyphicon glyphicon-print pull-left"></span>
                        Realizar una impresion de los resultados
                    </a>
                </form>
            </div><!-- /.box-body -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('worker-profile/js/index.js') }}"></script>
@endsection