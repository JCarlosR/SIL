@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de la Hoja de Ruta</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <form action="#">
                            <div class="col-md-6">
                                <h3>Datos de la empresa</h3>

                                <div class="form-group">
                                    <label for="txtnombre">Nombre comercial</label>
                                    <input type="text" class="form-control" id="txtnombre" value="{{ $empresa->nombre_comercial }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtRUC">RUC</label>
                                    <input type="text" class="form-control" id="txtRUC" value="{{ $empresa->ruc }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtDireccion">Web</label>
                                    <input type="text" class="form-control" id="txtDireccion" value="{{ $empresa->web }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Datos del Paciente</h3>
                                <div class="form-group">
                                    <label for="txtpaciente">Nombre</label>
                                    <input type="text" class="form-control" id="txtpaciente" value="{{ $paciente->nombre }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtNumHijo">Número de hijos</label>
                                    <input type="text" class="form-control" id="txtNumHijo" value="{{ $paciente->numhijos }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txtNivelEstudio">Nivel de estudios</label>
                                    <input type="text" class="form-control" id="txtNivelEstudio" value="{{ $paciente->estudios }}" readonly>
                                </div>
                            </div>
                            <br>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Trabajador</th>
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
                                    <?php $i=$i+1; $esp = 'NO'; $psi = 'NO'; $rx = 'NO'; $me = 'NO'; $psien='NO'; $ea = 'NO'; $lab= 'NO'; $oft= 'NO'; ?>
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{$paciente->nombre}}</td>
                                       @foreach($examenes as $pexamen)
                                            @if($pexamen->examen_id == 1)
                                                <?php $esp = 'SÍ'; ?>
                                            @endif
                                            @if($pexamen->examen_id == 2)
                                                <?php $psi = 'SÍ'; ?>
                                            @endif
                                            @if($pexamen->examen_id == 3)
                                                <?php $rx = 'SÍ'; ?>
                                            @endif
                                            @if($pexamen->examen_id == 4)
                                                <?php $me = 'SÍ'; ?>
                                            @endif
                                            @if($pexamen->examen_id == 5)
                                                <?php $psien = 'SÍ'; ?>
                                            @endif
                                            @if($pexamen->examen_id == 6)
                                                <?php $ea = 'SÍ' ?>
                                            @endif
                                            @if($pexamen->examen_id == 7)
                                                <?php $lab = 'SÍ' ?>
                                            @endif
                                            @if($pexamen->examen_id == 8)
                                                <?php $oft = 'SÍ' ?>
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
                                </tbody>
                            </table>
                            <br>
                            <div class="col-md-offset-4 col-md-4">
                                <div class="form-group">
                                    <label for="txtweb">Firma del paciente</label>
                                    <input type="text" class="form-control" id="txtweb" readonly>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class=" col-md-6">
                                    <a class="btn btn-primary btn-lg btn-block" href="{{ url('orden/verificar') }}/{{ $protocolo->id }}">Volver</a>
                                </div>
                                <div class=" col-md-6">
                                    <a target="_blank" class="btn btn-warning btn-lg btn-block" href="{{ url('hojaruta/visualizar') }}/{{ $orden }}/{{ $paciente->id }}">Imprimir</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection