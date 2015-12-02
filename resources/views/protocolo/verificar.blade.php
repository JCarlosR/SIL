@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', 'Formulario para verificar órdenes registradas')

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Verificación de Orden</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-6">
                        <div class="form-group">
                            <h3>Empresa</h3>
                            <select class="form-control" id="cboEmpresa" required>
                                @foreach($empresas as $empresa)
                                <option value="{{ $empresa->id }}">{{ $empresa->nombre_comercial }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a id="buscar" class="btn btn-primary">Buscar</a>

                        <br>
                        <p>Listado de órdenes por empresa</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Empresa</th>
                                    <th>Orden</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($protocolos as $protocolo)
                                <tr>
                                    <td>{{ $protocolo->id }}</td>
                                    <td>{{ 1000 + $protocolo->id }}</td>
                                    <td>{{ $protocolo->empresa->nombre_comercial }}</td>
                                    <td>
                                        <button type="button" id="{{ $protocolo->id }}" class="asignar btn btn-danger" onclick="location.href='{{ url('orden/verificar') }}/{{ $protocolo->id }}'">Ver Orden</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('protocolo') }}"></script>
@endsection