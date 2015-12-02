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
    <div class="col-md-offset-3 col-md-6">
        <div class="box">
            <div class="box-header with-border requisito-text">
                <h2 class="box-title">Se requiere personal para los siguientes cargos</h2>
            </div>
        </div>
        @foreach($asignados as $cargo)
            <div class="checkbox">
                <h4><input type="checkbox" checked/><a href="#"> {{ $cargo->unidad }}</a></h4>
            </div>
        @endforeach
    </div>
@endsection
