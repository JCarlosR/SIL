<p>Listado de habilidades</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Habilidad</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($habilidades as $skill)
        <tr>
            <td class="col-md-1" data-i>{{ ++$h }}</td>
            <td class="col-md-2" data-name>{{ $skill->name }}</td>
            <td class="col-md-7" data-description>{{ $skill->description }}</td>
            <td class="col-md-2">
                <button class="btn btn-success" data-editar="{{ $skill->id }}">Editar</button>
                <button class="btn btn-danger" data-eliminar>Eliminar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<!-- Registro usando Ajax -->
<form action="#" method="POST">
    <p>Registrar una nueva habilidad</p>

    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="tipo" value="Valor"/>
    <div class="form-group">
        <label for="nombre">Nueva habilidad</label>
        <input type="text" name="nombre" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary pull-right">Registrar nueva habilidad</button>
</form>
