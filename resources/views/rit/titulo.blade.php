@extends('layouts.general')

@section('title', 'MODULO DE PERSONAL')
@section('sub-title', 'Formulario para elaboración del RIT')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Reglamento Interno del Trabajo</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <p>A continuación usted puede ver la lista de Títulos del RIT</p>
                    <div class="col-md-offset-1 col-md-6">
                            <h3>Títulos</h3>
                        <template id="template-alerta">
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Hey!</strong> <span></span>
                            </div>
                        </template>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($titulos as $titulo)
                                <tr>
                                    <td class="col-md-1" data-i>{{ $titulo->id }}</td>
                                    <td class="col-md-3" data-nombre>{{ $titulo->nombre }}</td>
                                    <td class="col-md-3">
                                        <button class="btn btn-success" data-editar="{{ $titulo->id }}">Editar</button>
                                        <a class="btn btn-primary" href="{{ url('rit/capitulos') }}/{{ $titulo->id }}">Ver Capítulos</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form action="#" method="POST">
                            <p>Registrar un nuevo Titulo</p>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="tipo" value="Valor"/>
                            <div class="form-group">
                                <label for="nombre">Nuevo Titulo</label>
                                <input type="text" name="nombre" class="form-control"/>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Registrar nuevo</button>
                        </form>
                            <br>
                            <br>
                        <a href="{{ url('rit/ver') }}" target="_blank" class="btn btn-block bg-orange margin">
                            <span class="glyphicon glyphicon-new-window pull-left"></span>
                            Generar RIT en PDF
                        </a>

                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>

    <!-- Modal para editar objeto y alcance -->
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
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value=""/>
                        <div class="form-group">
                            <label for="nombre">Nuevo Nombre de Titulo</label>
                            <input type="text" name="nombre" class="form-control"/>
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

@endsection

@section('scripts')
    <script src="{{ asset('scripts/rit/titulo.js') }}"></script>
@endsection