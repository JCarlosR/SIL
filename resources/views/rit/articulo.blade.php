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
                    <p>A continuación usted puede ver la lista de Artículos del Capítulo {{ $id }}</p>
                    <div class="col-md-offset-1 col-md-6">
                            <h3>Artículos</h3>
                        <template id="template-alerta">
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Hey!</strong> <span></span>
                            </div>
                        </template>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Artículo</th>
                                <th>Descripción</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articulos as $articulo)
                                <tr>
                                    <td class="col-md-1" data-i>{{ $articulo->id }}</td>
                                    <td class="col-md-3" data-descripcion>{{ $articulo->descripcion }}</td>
                                    <td class="col-md-3">
                                        <button class="btn btn-success" data-editar="{{ $articulo->id }}">Editar</button>
                                        <a class="btn btn-primary" href="{{ url('rit/items') }}/{{ $articulo->id }}">Ver Items</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                            <br>
                            <br>
                            <button type="button" id="guardar" class="btn btn-primary btn-lg btn-block">Guardar Cambios</button>

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
                            <label for="descripcion">Nuevo Nombre de Artículo</label>
                            <input type="text" name="descripcion" class="form-control"/>
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
    <script src="{{ asset('scripts/rit/articulo.js') }}"></script>
@endsection