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
    <li><a href="{{url('personal/seleccion')}}">Selección</a></li>
@endsection

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Se requiere personal para el año 2016
                    Convocatoria desde 01 Enero  hasta 10 Febrero
                </h4>
            </div>

            <div class=" col-md-offset-1 panel-body">
                @foreach($asignados as $cargo)
                    <div class="checkbox">
                        <h4><span class="glyphicon glyphicon-education"></span><a href="{{ url('personal/seleccion/requerimientos') }}/{{ $cargo->id }}"> {{ $cargo->nombre }}</a></h4>
                    </div>
                @endforeach
            </div>
            <div class="panel-footer">
                <p> Haga click en un cargo para visualizar más detalles </p>
            </div>
        </div>
    </div>
@endsection
