@extends('layouts.general')

@section('title', 'MODULO DE ATENCIÓN Y CONSULTA')
@section('sub-title', 'Formulario para registrar un nuevo protocolo')

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Registro de protocolo <span id="max">{{ $maxid }}</span></h2>
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
                        <a href="{{ url('empresa/registrar') }}" class="btn btn-primary">Nueva</a>

                        <form id="formTrabajador">
                            <h3>Trabajador</h3>
                            <div class="form-group">
                                <label for="txtDNI">DNI</label>
                                <input type="text" class="form-control" id="txtDNI" placeholder="DNI" required>
                            </div>
                            <div class="form-group">
                                <label for="txtNombre">Nombre</label>
                                <input type="text" class="form-control" id="txtNombre" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="txtPerfil">Perfil</label>
                                <select id="cboPerfil" class="form-control" required>
                                    <option value="1">Trabajador en oficina</option>
                                    <option value="2">Trabajador en planta</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </form>

                        <br>
                        <p>Listado de trabajadores en el protocolo</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Trabajador</th>
                                    <th>DNI</th>
                                    <th>Perfil</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <button id="btnRegistrar" type="button" class="btn btn-primary btn-lg btn-block">Continuar registro</button>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/Protocolo/gestionar.js') }}"></script>
@endsection