@extends('layouts.general')

@section('title', 'Página de bienvenida')
@section('sub-title', '¡ Bienvenido nuevamente !')

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Título de la sección</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni deleniti officiis, fugiat, labore vitae sint dolores necessitatibus possimus officia, autem veniam. Id ad iste itaque illo quos, dignissimos ullam architecto!
        </div><!-- /.box-body -->
        <div class="box-footer">
            Contenido del Footer
        </div><!-- /.box-footer-->
    </div>
@endsection