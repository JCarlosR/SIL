@extends('layouts.general')

@section('title', 'Datos del postulante')
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
    <li><a href="{{url('personal/personal')}}">Postulación</a></li>
@endsection

@section('content')
    <div class="col col-md-offset-2 col-md-8">
        <form action="{{ url('personal/registrar/postulante/'.$id) }}" method="POST" enctype="multipart/form-data">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-header with-border">
                        <h3 class="box-title">Datos personales</h3>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label for="nombres">Nombre completo</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Nombres" value="{{ old('nombres') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" name="dni" placeholder="DNI" value="{{ old('dni') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="{{ old('direccion') }}" required/>
                    </div>

                    <div class="form-group">
                        <label for="cv">Curriculum Vitae</label>
                        <div class="btn btn-primary btn-file">
                            <span class="glyphicon glyphicon-open"></span>
                            <input type="file" name="cv" accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/msword,application/pdf">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Postular <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
        </form>
    </div>

@endsection
