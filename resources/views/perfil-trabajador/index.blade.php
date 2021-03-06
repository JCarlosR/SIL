@extends('layouts.general')

@section('title', 'Perfil del trabajador')
@section('sub-title', 'Edición del perfil del trabajador')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Perfil del trabajador</a></li>
@endsection

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <template id="template-fila">
        <tr>
            <td class="col-md-1" data-i></td>
            <td class="col-md-2" data-name></td>
            <td class="col-md-7" data-description></td>
            <td class="col-md-2">
                <button class="btn btn-success" data-editar="">Editar</button>
                <button class="btn btn-danger" data-eliminar>Eliminar</button>
            </td>
        </tr>
    </template>

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
                <h3 class="box-title">Perfil del trabajador</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>A continuación defina los valores, habilidades y conocimientos que todo trabajador en Lezama debe presentar.</p>
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#valores">Valores</a></li>
                    <li><a data-toggle="tab" href="#habilidades">Habilidades</a></li>
                    <li><a data-toggle="tab" href="#conocimientos">Conocimientos</a></li>
                </ul>

                <div class="tab-content">
                    <div id="valores" class="tab-pane fade in active">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('perfil-trabajador.valores')
                            </div>
                        </div>
                    </div>
                    <div id="habilidades" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('perfil-trabajador.habilidades')
                            </div>
                        </div>
                    </div>
                    <div id="conocimientos" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('perfil-trabajador.conocimientos')
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ url('perfil-trabajador/ver/pdf') }}" target="_blank" class="btn btn-block bg-orange">
                    <span class="glyphicon glyphicon-new-window pull-left"></span>
                    Generar perfil del trabajador en PDF
                </a>
                <a href="{{ url('perfil-trabajador/ver/html') }}" target="_blank" class="btn btn-block bg-purple">
                    <span class="glyphicon glyphicon-new-window pull-left"></span>
                    Visualizar perfil del trabajador en HTML
                </a>
            </div><!-- /.box-body -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/worker-profile/index.js') }}"></script>
@endsection