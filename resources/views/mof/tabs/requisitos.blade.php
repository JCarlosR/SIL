<template id="template-requisito">
    <tr>
        <td data-i></td>
        <td data-nombre></td>
        <td data-descripcion></td>
        <td>
            <button class="btn btn-success" data-editar="">Editar</button>
            <button class="btn btn-danger" data-eliminar="">Eliminar</button>
        </td>
    </tr>
</template>

<p>Listado de requisitos</p>
<table id="tablaRequisitos" class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($requisitos as $requisito)
    <tr>
        <td data-i>{{ ++$req }}</td>
        <td data-nombre>{{ $requisito->nombre }}</td>
        <td data-descripcion>{{ $requisito->descripcion }}</td>
        <td>
            <button class="btn btn-success" data-editar="{{ $requisito->id }}">Editar</button>
            <button class="btn btn-danger" data-eliminar="{{ $requisito->id }}">Eliminar</button>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<p>Registrar nuevo requisito</p>
<form id="formRegistrarRequisito" action="{{ url('cargos/requisitos/registrar') }}" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="cargo_id" value="{{ $cargo->id }}"/>
    <div class="form-group">
        <label for="nombre" class="col-sm-1 control-label">Nombre</label>
        <div class="col-md-11">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del requisito"/>
        </div>
    </div>
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Descripción</label>
        <div class="col-md-11">
            <input type="text" name="descripcion" class="form-control" placeholder="Describa el requisito del cargo"/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary pull-right">Registrar requisito</button>
</form>

@section('scripts')
    @parent
    <script src="{{ asset('scripts/mof/requisitos.js') }}"></script>
@endsection