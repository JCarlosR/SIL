<template id="template-atribucion">
    <tr>
        <td data-i></td>
        <td data-descripcion></td>
        <td>
            <button class="btn btn-success" data-editar="">Editar</button>
            <button class="btn btn-danger" data-eliminar="">Eliminar</button>
        </td>
    </tr>
</template>

<p>Listado de atribuciones</p>
<table id="tablaAtribuciones" class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($atribuciones as $atribucion)
    <tr>
        <td data-i>{{ ++$atr }}</td>
        <td data-descripcion>{{ $atribucion->descripcion }}</td>
        <td>
            <button class="btn btn-success" data-editar="{{ $atribucion->id }}">Editar</button>
            <button class="btn btn-danger" data-eliminar="{{ $atribucion->id }}">Eliminar</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<p>Registrar nueva atribución</p>
<form id="formRegistrarAtribucion" action="{{ url('cargos/atribuciones/registrar') }}" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="cargo_id" value="{{ $cargo->id }}"/>
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Descripción</label>
        <div class="col-md-11">
            <input type="text" name="descripcion" class="form-control" placeholder="Describa la atribución del cargo"/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary pull-right">Registrar atribución</button>
</form>

@section('scripts')
    @parent
    <script src="{{ asset('scripts/mof/atribuciones.js') }}"></script>
@endsection