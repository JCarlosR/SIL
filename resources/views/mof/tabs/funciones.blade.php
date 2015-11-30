<template id="template-funcion">
    <tr>
        <td data-i></td>
        <td data-descripcion></td>
        <td>
            <button class="btn btn-success" data-editar="">Editar</button>
            <button class="btn btn-danger" data-eliminar="">Eliminar</button>
        </td>
    </tr>
</template>

<p>Listado de funciones</p>
<table id="tablaFunciones" class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($funciones as $funcion)
    <tr>
        <td data-i>{{ ++$fun }}</td>
        <td data-descripcion>{{ $funcion->descripcion }}</td>
        <td>
            <button class="btn btn-success" data-editar="{{ $funcion->id }}">Editar</button>
            <button class="btn btn-danger" data-eliminar="{{ $funcion->id }}">Eliminar</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<p>Registrar nueva función</p>
<form id="formRegistrarFuncion" action="{{ url('cargos/funciones/registrar') }}" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="cargo_id" value="{{ $cargo->id }}"/>
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Descripción</label>
        <div class="col-md-11">
            <input type="text" name="descripcion" class="form-control" placeholder="Describa la función del cargo"/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary pull-right">Registrar función</button>
</form>

@section('scripts')
    @parent
    <script src="{{ asset('scripts/mof/funciones.js') }}"></script>
@endsection