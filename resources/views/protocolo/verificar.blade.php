@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', 'Formulario para verificar o cancelar protocolos')

@section('styles')
    <style>
        .separar {
            margin-top: 6em;
        }
    </style>
@endsection

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Verificación de protocolos</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-8">

                        <div class="form-group">
                            <h3>Empresa</h3>
                            <div class="col-md-9">
                                <select class="form-control" id="cboEmpresa" required>
                                    @foreach($empresas as $empresa)
                                        <option value="{{ $empresa->id }}">{{ $empresa->nombre_comercial }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button id="buscar" class="btn btn-primary">Filtrar por empresa</button>
                            </div>
                        </div>

                        <p class="separar">Listado de protocolos pendientes de aprobación</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Empresa</th>
                                    <th>Fecha</th>
                                    <th>Orden</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($protocolos as $protocolo)
                                <tr>
                                    <td>{{ $protocolo->id }}</td>
                                    <td>{{ 1000 + $protocolo->id }}</td>
                                    <td>{{ $protocolo->empresa->nombre_comercial }}</td>
                                    <td>{{ $protocolo->fecha }}</td>
                                    <td>
                                        <a href="{{ url('orden/verificar') }}/{{ $protocolo->id }}" class="btn btn-primary">Ver orden</a>
                                        <a href="{{ url('protocolo/'.$protocolo->id.'/estado/Verificado') }}" class="btn btn-success">Verificar</a>
                                        <a href="{{ url('protocolo/'.$protocolo->id.'/estado/Cancelado') }}" class="btn btn-danger">Cancelar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/protocolo/verificar.js') }}"></script>
@endsection