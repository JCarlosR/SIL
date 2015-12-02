@extends('layouts.general')

@section('title', 'Gestión de cargos que requiren personal')
@section('sub-title', ' ')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Convocatoria</a></li>
@endsection

@section('content')
    <div class="col-md-5">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Cargos</h3>
            </div>
            <div class="box-body">
                @if($errors->has())
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div id="noAsignados">
                    @foreach($noAsignados as $cargo)
                        <div data-cargo="{{ $cargo->id }}" >
                            <input type="checkbox" name="origen" value="{{ $cargo->id }}"/><a href="{{ url('personal/requisitos') }}/{{ $cargo->id }}"> {{ $cargo->unidad }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 ">
        <button type="button" class="btn btn-info margen btn-block" onclick="asignar();">Asignar <span class="glyphicon glyphicon-forward" ></span> </button>
        <button type="button" class="btn btn-warning btn-block" onclick="devolver();"> <span class="glyphicon glyphicon-backward" ></span> Devolver</button>
    </div>
    <div class="col-md-5">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <h3 class="box-title">Cargos que requieren personal</h3>
                </div>
                <div id="asignados" >
                    @foreach($asignados as $cargo)
                        <div data-cargo="{{ $cargo->id }}">
                            <input type="checkbox" name="destino" value="{{ $cargo->id }}"/><a href="{{ url('personal/requisitos') }}/{{ $cargo->id }}"> {{ $cargo->unidad }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/personal/convocatoria.js') }}"></script>
@endsection