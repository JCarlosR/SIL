<template id="template-relacion">
    <tr>
        <td data-i></td>
        <td data-tipo></td>
        <td data-descripcion></td>
        <td>
            <button class="btn btn-success" data-editar="">Editar</button>
            <button class="btn btn-danger" data-eliminar="">Eliminar</button>
        </td>
    </tr>
</template>

<p>Listado de relaciones</p>
<table id="tablaRelaciones" class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Tipo de relación</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($relaciones as $relacion)
    <tr>
        <td data-i>{{ ++$rel }}</td>
        <td data-tipo>Relación {{ $relacion->tipo }}</td>
        <td data-descripcion>{{ $relacion->descripcion }}</td>
        <td>
            <button class="btn btn-success" data-editar="{{ $relacion->id }}">Editar</button>
            <button class="btn btn-danger" data-eliminar="{{ $relacion->id }}">Eliminar</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<p>Registrar nueva relación</p>
<form id="formRegistrarRelacion" action="{{ url('cargos/relaciones/registrar') }}" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="cargo_id" value="{{ $cargo->id }}"/>
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Tipo</label>
        <div class="col-md-11">
            <input type="radio" name="tipo" value="interna" checked/> Relación interna
            <input type="radio" name="tipo" value="externa"/> Relación externa
        </div>
    </div>
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Descripción</label>
        <div class="col-md-11">
            <input type="text" name="descripcion" class="form-control" placeholder="Describa la relación con otro cargo"/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary pull-right">Registrar relación</button>
</form>

@section('scripts')
    @parent
    <script src="{{ asset('scripts/mof/relaciones.js') }}"></script>
@endsection