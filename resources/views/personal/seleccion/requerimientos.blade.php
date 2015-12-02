@extends('layouts.general')

@section('title', 'Reqerimientos del cargo')
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

    <div class="col-md-offset-1 col-md-10">
        <h3 class="box-title">{{$cargo->nombre}}</h3>
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <h3 class="box-title">Detalles del puesto</h3>
                </div>
                @foreach($funciones as $funcion)
                    <p><span class="glyphicon glyphicon-triangle-right"></span> {{ $funcion->descripcion }}</p>
                @endforeach
            </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <h3 class="box-title">Requisitos del puesto</h3>
                </div>
                @foreach($requisitos as $requisito)
                    <p><span class="glyphicon glyphicon-pushpin"></span> {{ $requisito->descripcion }}</p>
                @endforeach
            </div>
        </div>
            <button type="button" onclick="location.href='{{ url('personal/seleccion/postulante')}}'" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Continuar</button>
    </div>
@endsection