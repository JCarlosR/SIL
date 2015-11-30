@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', 'Reporte de Orden a Verificar')

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">ORDEN N° {{ 1000+$id }}</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-8">
                        <br>
                        <h2>Empresa {{ $protocolo->empresa->nombre_comercial }}</h2>
                        <span></span>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Trabajador</th>
                                <th>Perfil</th>
                                <th>Espi.</th>
                                <th>Psic.</th>
                                <th>R.X</th>
                                <th>M.E.</th>
                                <th>Psi.en.</th>
                                <th>E.A.</th>
                                <th>Lab.</th>
                                <th>Oft.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach($ordenes as $orden)
                            <?php $i=$i+1; $esp = 'no'; $psi = 'no'; $rx = 'no'; $me = 'no'; $psien='no'; $ea = 'no'; $lab= 'no'; $oft= 'no'; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{$orden->paciente->nombre}}</td>
                                    <td>{{ $orden->paciente->perfil->descripcion }}</td>
                                    @foreach($orden->pacienteexamenes as $pexamen)
                                        @if($pexamen->examen_id == 1)
                                            <?php $esp = 'si'; ?>
                                        @endif
                                        @if($pexamen->examen_id == 2)
                                            <?php $psi = 'si'; ?>
                                        @endif
                                        @if($pexamen->examen_id == 3)
                                            <?php $rx = 'si'; ?>
                                        @endif
                                        @if($pexamen->examen_id == 4)
                                            <?php $me = 'si'; ?>
                                        @endif
                                        @if($pexamen->examen_id == 5)
                                            <?php $psien = 'si'; ?>
                                        @endif
                                        @if($pexamen->examen_id == 6)
                                            <?php $ea = 'si' ?>
                                        @endif
                                        @if($pexamen->examen_id == 7)
                                            <?php $lab = 'si' ?>
                                        @endif
                                        @if($pexamen->examen_id == 8)
                                            <?php $oft = 'si' ?>
                                        @endif
                                    @endforeach
                                    <td>{{ $esp }}</td>
                                    <td>{{ $psi }}</td>
                                    <td>{{ $rx }}</td>
                                    <td>{{ $me }}</td>
                                    <td>{{ $psien }}</td>
                                    <td>{{ $ea }}</td>
                                    <td>{{ $lab }}</td>
                                    <td>{{ $oft }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('orden/ver') }}/{{ $id }}" class="btn btn-block bg-orange margin">
                            <span class="glyphicon glyphicon-new-window pull-left"></span>
                            Generar Orden en PDF
                        </a>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection
