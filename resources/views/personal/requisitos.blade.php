@extends('layouts.general')

@section('title', 'Gestión de Requisitos')
@section('sub-title', ' ')
@section('styles')
    <style>
        .requisito-text
        {
            text-align: center;
        }
    </style>
@endsection

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{url('personal/convocatoria')}}">Convocatoria</a></li>
@endsection

@section('content')
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-heading">
            <div class="box-header with-border requisito-text">
                <strong class="box-title">{{ $cargo->unidad }}</strong>
            </div>
        </div>
        <div class="panel-body">
            <form action="{{ url('personal/registrar/requisitos')}}/{{ $cargo->id }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label for="descripcion">Requisito</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción" value="{{ old('descripcion') }}" required/>
                </div>
                <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Guardar Requisito</button>
            </form>
        </div>
    </div>

    <div class="col-md-offset-2 col-md-8">
        @if (count($requisitos) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de Requisitos
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Cargo</th>
                            <th>Requisito</th>
                        </thead>
                        <tbody>
                        @foreach ($requisitos as $requisito)
                            <tr>
                                <td class="table-text"><div>{{ $requisito->descripcion  }}</div></td>
                                <td>
                                    <button type="submit" class="btn btn-success" data-id="{{ $requisito->id }}" data-descripcion="{{ $requisito->descripcion }}">
                                        <i class="fa fa-pencil"></i>Editar
                                    </button>

                                    <button type="submit" class="btn btn-danger" data-eliminar  data-semidelete="{{ $requisito->id }}" data-descripcion="{{ $requisito->descripcion }}">
                                        <i class="fa fa-trash"></i>Eliminar
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

    <div id="modalEditar" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar requisito</h4>
                </div>
                <form action="{{ url('personal/modificar/requisitos') }}/{{ $cargo->id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />

                        <div class="form-group">
                            <label for="descripcion">Nueva descripción</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group pull-left">
                            <button class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-menu-up"></span> Salir</button>
                        </div>
                        <div class="btn-group pull-right">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Guardar Requisito</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="modalEliminar" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Requisito</h4>
                </div>
                <form action="{{ url('personal/eliminar/requisitos') }}/{{ $cargo->id }}" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label for="descripcion">¿Desea eliminar el siguiente requisito ?</label>
                            <input type="text" readonly class="form-control" name="descripcion"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group pull-left">
                            <button class="btn btn-danger pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-menu-up"></span> Cancelar</button>
                        </div>
                        <div class="btn-group pull-right">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Aceptar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('scripts/personal/requisitos.js') }}"></script>
@endsection