@extends('layouts.general')

@section('title', 'Perfil del trabajador')
@section('sub-title', 'Edición del perfil del trabajador')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Perfil del trabajador</a></li>
@endsection

@section('content')
    <template id="template-alerta">
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey!</strong> <span></span>
        </div>
    </template>

    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Perfil del trabajador</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>A continuación defina los valores, habilidades y conocimientos que todo trabajador en Lezama debe presentar.</p>
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#valores">Valores</a></li>
                    <li><a data-toggle="tab" href="#habilidades">Habilidades</a></li>
                    <li><a data-toggle="tab" href="#conocimientos">Conocimientos</a></li>
                </ul>

                <div class="tab-content">
                    <div id="valores" class="tab-pane fade in active">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                @include('perfil-trabajador.valores')
                            </div>
                        </div>
                    </div>
                    <div id="habilidades" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {{--@include('mof.skills.atribuciones')--}}
                            </div>
                        </div>
                    </div>
                    <div id="conocimientos" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {{--@include('mof.skills.funciones')--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('worker-profile/js/index.js') }}"></script>
@endsection