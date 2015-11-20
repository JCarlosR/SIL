@extends('layouts.general')

@section('title', 'Página de bienvenida')
@section('sub-title', '¡ Bienvenido nuevamente !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Bienvenido</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <img src="{{ asset('images/banner-lezama.png') }}"/>
        </div><!-- /.box-body -->
        <div class="box-footer">
            Por favor seleccione una de las opciones de la izquierda.
        </div><!-- /.box-footer-->
    </div>
@endsection