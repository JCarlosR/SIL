@extends('layouts.general')

@section('title', 'Quejas')
@section('sub-title', 'Listado de quejas por atender')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Quejas</a></li>
    <li class="active"><a href="#">Listado</a></li>
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
            <h3 class="box-title">Listado de quejas pendientes por atender</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-hover">
                <tr>
                    <th class="col-md-1">#</th>
                    <th class="col-md-1">Fecha</th>
                    <th class="col-md-2">E-mail</th>
                    <th class="col-md-6">Contenido</th>
                    <th class="col-md-2">Opciones</th>
                </tr>
                <tbody>
                @foreach($quejas as $queja)
                    <tr>
                        <td>{{ ++$q }}</td>
                        <td>{{ $queja->fecha }}</td>
                        <td>{{ $queja->email }}</td>
                        <td>{{ $queja->descripcion }}</td>
                        <td>
                            <a href="{{ url('queja/'.$queja->id.'/estado/Atendida') }}" class="btn btn-success">Atendida</a>
                            <a href="{{ url('queja/'.$queja->id.'/estado/Omitida') }}" class="btn btn-danger">Omitir</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/mof/cargos.js') }}"></script>
@endsection