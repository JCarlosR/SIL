@extends('layouts.general')

@section('title', 'Contratación de personal')
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
@endsection

@section('content')
    <div class="col col-md-12">
        <form action="{{ url('personal/contratacion/listarFecha')}}" method="POST" enctype="multipart/form-data">
            <div class="col-md-offset-2 col-md-4 form-group">
                <label for="clave">Fecha Inicio</label>
                <input type="date" name="fechaI" id="">
            </div>

            <div class="col-md-4 form-group">
                <label for="clave">Fecha Fin </label>
                <input type="date" name="fechaF" id="">
            </div>
            <div class="col-md-2 form-group">
                <div class=" form-group"><button type="submit" class="btn btn-primary pull-left btn-lg"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Buscar</button></div>
            </div>
        </form>
    </div>

    <div class="col-md-12">
        @if (count($postulantes) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4>Resultados de la convocatoria</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <tr>
                                <th>Cargo</th>
                                <th>Nombres</th>
                                <th>DNI</th>
                                <th>Correo electrónico</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Opción</th>
                            </tr>
                        </thead>
                         <tbody id="myTable">
                        @foreach ($postulantes as $postulante)
                            <tr>
                                <td class="table-text">
                                    <div>
                                    @foreach ( $postulaciones as $postulacion)
                                        @if( $postulacion->postulante_id == $postulante->id)
                                            @foreach($cargos as $cargo)
                                                @if($postulacion->cargo_id == $cargo->id)
                                                    {{ $cargo->nombre }}
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    </div>
                                </td>
                                <td class="table-text"><div>{{ $postulante->full_name  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->dni  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->email  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->phone  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->address  }}</div></td>
                                <td>
                                    <div>
                                        <button type="submit" onclick="location.href='{{ url('personal/datos/personal/'.$postulante->id)}}'" class="btn btn-primary">
                                            <i class="fa fa-ok"></i>Contratar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-center">
                    <ul class="pagination pagination-lg pager" id="myPager"></ul>
                </div>
            </div>
        @endif
    </div>

    <div class="col-md-offset-1 col-md-10">
        <form action="{{ url('personal/registrar/personal')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            @if (count($personal) > 0)
                <div class="col-md-6 form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" value="{{ $personal->dni }}" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="clave">Contraseña</label>
                    <input type="text" class="form-control" name="clave"  value=" {{ $personal->dni }}" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="nombres">Nombre completo</label>
                    <input type="text" class="form-control" name="nombres" value="{{ $personal->full_name }}" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="dni">DNI</label>
                    <input type="text" class="form-control" name="dni" value="{{ $personal->dni }}" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="text" class="form-control" name="email" value="{{ $personal->email }}" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" name="telefono"  value="{{ $personal->phone }}" required/>
                </div>
                <div class="col-md-6 form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" value="{{ $personal->address }}" required/>
                </div>
                <div class="col-md-6 form-group"><button type="submit" class="btn btn-primary pull-right btn-lg">Guardar<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button></div>

            @endif
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/personal/paginar.js') }}"></script>
@endsection