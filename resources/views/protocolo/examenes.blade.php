@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', '¡ Bienvenido a Lezama Consultores !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de protocolo <span id="max">{{ $maxid }}</span></h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-offset-2 col-md-6">
                    <h3>Asignación de exámenes</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Trabajador</th>
                            <th>DNI</th>
                            <th>Perfil</th>
                            <th>Exámenes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->dni }}</td>
                            <td>{{ $paciente->pacienteperfil_id }}</td>
                            <td>
                                <button type="button" id="{{ $paciente->id }}" class="asignar btn btn-danger">Asignar</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                    <button id="btnGuardar" type="button" class="btn btn-primary btn-lg btn-block"  onclick="location.href='{{ '../' }}'">Aceptar</button>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>

    <div class="modal fade" id="modalExamenes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Exámenes</h4>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                        @foreach($examenes as $examen)
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="examenes[]" value="{{ $examen->id }}">{{ $examen->nombre }}</label>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="guardar btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/protocolo/asignar.js') }}"></script>
@endsection