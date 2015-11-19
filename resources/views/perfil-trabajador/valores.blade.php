<p>Listado de valores</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Valor</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($valores as $valor)
        <tr>
            <td class="col-md-1" data-i>{{ ++$v }}</td>
            <td class="col-md-2" data-name>{{ $valor->name }}</td>
            <td class="col-md-7" data-description>{{ $valor->description }}</td>
            <td class="col-md-2">
                <button class="btn btn-success" data-editar="{{ $valor->id }}">Editar</button>
                <button class="btn btn-danger" data-eliminar>Eliminar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<!-- Registro usando Ajax -->
<form action="#" method="POST">
    <p>Registrar un nuevo valor</p>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="tipo" value="Valor"/>
    <div class="form-group">
        <label for="nombre">Nuevo valor</label>
        <input type="text" name="nombre" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary pull-right">Registrar nuevo valor</button>
</form>
