<p>Listado de valores</p>
<table class="table table-hover">
    <tr>
        <th>#</th>
        <th>Valor</th>
        <th>Descripción</th>
        <th>Opciones</th>
    </tr>
    <tbody>
    <tr>
        <td>1</td>
        <td>Respetar a los otros</td>
        <td>El individuo que se autorespeta y sabe respetar a los otros ...</td>
        <td>
            <button class="btn btn-success">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
        </td>
    </tr>
    </tbody>
</table>

<p>Registrar un nuevo valor</p>
<form action="{{ url('/') }}">
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
