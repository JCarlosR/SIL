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
                    <p>A continuación usted puede ver la lista de Capítulos del Título {{ $id }}</p>
                    <div class="col-md-offset-1 col-md-6">
                            <h3>Capítulos</h3>
                        <template id="template-alerta">
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Hey!</strong> <span></span>
                            </div>
                        </template>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Capítulo</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($capitulos as $capitulo)
                                <tr>
                                    <td class="col-md-1" data-i>{{ $capitulo->romano }}</td>
                                    <td class="col-md-3" data-descripcion>{{ $capitulo->descripcion }}</td>
                                    <td class="col-md-3">
                                        <button class="btn btn-success" data-editar="{{ $capitulo->id }}">Editar</button>
                                        <a class="btn btn-primary" href="{{ url('rit/articulos') }}/{{ $capitulo->id }}">Ver Artítulos</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form action="#" method="POST">
                            <p>Registrar un nuevo Capítulo</p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="tipo" value="Valor"/>
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $id }}" />
                                <label for="romano">Nro Capitulo</label>
                                <input type="text" name="romano" class="form-control"/>
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control"/>
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
                            <label for="descripcion">Nueva descripción del capítulo</label>
                            <textarea name="descripcion" class="form-control" rows="3"></textarea>
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
    <script src="{{ asset('scripts/rit/capitulo.js') }}"></script>
@endsection