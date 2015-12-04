@extends('layouts.general')

@section('title', 'Selección de personal')
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
    <li><a href="{{url('personal/seleccion')}}">Selección</a></li>
@endsection

@section('content')
    <div class="col-md-12">
        <h3>{{ $cargo->nombre }}</h3>
        @if (count($postulantes) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de Postulantes
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Curriculum Vitae</th>
                        <th>Estado</th>
                        <th>Aprobación</th>
                        </thead>
                        <tbody>
                        @foreach ($postulantes as $postulante)
                            <tr>
                                <td class="table-text"><div>{{ $postulante->full_name  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->dni  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->email  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->phone  }}</div></td>
                                <td class="table-text"><div>{{ $postulante->address  }}</div></td>
                                <td class="table-text">
                                    <div>
                                        <button type="submit" onclick="location.href='{{ url('personal/seleccion/cv/'.$postulante->id)}}'"  class="btn btn-primary">
                                            <i class="glyphicon glyphicon-download-alt"></i>{{ $postulante->cVitae  }}
                                        </button>
                                    </div>
                                </td>
                                <td class="table-text"><div> @if($postulante->estado==0 )No aprobado @else Aprobado @endif</div></td>
                                <td>
                                    <div>
                                        <button type="submit" onclick="location.href='{{ url('personal/seleccion/estado/'.$postulante->id)}}'" class="btn btn-primary">
                                            <i class="fa fa-ok"></i>Aprobar
                                        </button>
                                        <button type="submit" onclick="location.href='{{ url('personal/seleccion/noEstado/'.$postulante->id)}}'" class="btn btn-primary">
                                            <i class="fa fa-ok"></i>No aprobar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
