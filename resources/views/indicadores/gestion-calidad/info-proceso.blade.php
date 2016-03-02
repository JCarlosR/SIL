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
            <h2 class="box-title">Índice de tiempo útil por proceso</h2>
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
                            Este indicador servira para mostrar la relacion entre el tiempo
                            útil en cada proceso con respecto al total del tiempo empleado.
                        </p>
                        <p>
                            De esta manera se podrá analizar si el proceso esta bien o mal y
                            realizar acciones de mejora.
                            Tiempo útil(operacion, inspeccion, combinada, almacenaje)
                            Tiempo no útil(demora, transporte)
                        </p>
                        <label for="">Fórmula del indicador</label>
                        <h3>
                            Tiempo útil/Total de tiempo
                        </h3>
                        <label for="">Semáforo del indicador</label>
                        <p>
                            Mas de 60%
                        </p>
                        <p>
                            50 – 60%
                        </p>
                        <p>
                            Menos de 50%
                        </p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <label for="">Controles del indicador</label>
                        <p>KPI por proceso</p>
                        <form action="{{ url('indicadores/gestion-calidad/proceso/grafica') }}" method="POST" id="formulario">
                            {{ csrf_field() }}
                            <select name="proceso" id="proceso">
                                @foreach($procesos as $proceso)
                                    <option value="{{ $proceso->id }}">{{ $proceso->nombre }}</option>
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