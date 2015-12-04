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
@endsection

@section('content')
    <div class="col-md-12">
        @if ( count($postulantes) > 0 )
            <div class="panel panel-default">
                <div class="panel-heading">
                    Resultados de convocatoria
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Cargo</th>
                            <th>Nombres</th>
                            <th>DNI</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                        </thead>
                        <tbody>
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
                                <td class="table-text"><div> @if($postulante->estado==0 )No aprobado @else Aprobado @endif</div></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
