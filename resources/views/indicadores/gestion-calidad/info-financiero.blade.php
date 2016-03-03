@extends('layouts.general')

@section('title', 'Procesos de la empresa')
@section('sub-title', 'Edición de procesos de la empresa')

@section('items')
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Procesos de la empresa</a></li>
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h2 class="box-title">Índice de gastos por área</h2>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-6">
                        <label for="">Descripción del indicador</label>
                        <p>
                            Este indicador servira para mostrar la relacion entre los presupuestos y los
                            gastos reales, de esta manera se podra analizar el cumplimiento de estos.
                        </p>
                        <p>
                            De esta manera se podrá analizar si el proceso esta bien o mal y
                            realizar acciones de mejora.
                        </p>
                        <label for="">Fórmula del indicador</label>
                        <h3>
                            Gasto Real/Gasto Presupuestado
                        </h3>
                        <label for="">Semáforo del indicador</label>
                        <p>
                            Mas de 1
                        </p>
                        <p>
                            1
                        </p>
                        <p>
                            Menos de 1
                        </p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <label for="">Controles del indicador</label>
                        <p>KPI por proceso</p>
                        <form action="{{ url('indicadores/gestion-calidad/financiero/grafica') }}" method="POST" id="formulario">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="">Ingrese el año que desea analizar.</label>
                                <input type="number" min="2000" step="1" name="anual">
                            </div>
                            <label for="">Elija el área que desea analizar</label>
                            <select name="area" id="area">
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                @endforeach

                            </select>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" id="btnGenerar" value="Generar gráfico"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection