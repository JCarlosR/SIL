<p>Listado de relaciones</p>
<table class="table table-hover">
    <tr>
        <th>#</th>
        <th>Tipo de relación</th>
        <th>Descripción</th>
        <th>Opciones</th>
    </tr>
    <tbody>
    <tr>
        <td>1</td>
        <td>Interna</td>
        <td>Ejerce mando directo sobre ...</td>
        <td>
            <button class="btn btn-success">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
        </td>
    </tr>
    </tbody>
</table>
<p>Registrar nueva relación</p>
<form action="" class="form-horizontal">
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Tipo</label>
        <div class="col-md-11">
            <input type="radio" value="interna" checked/> Relación interna
            <input type="radio" value="externa"/> Relación externa
        </div>
    </div>
    <div class="form-group">
        <label for="tipo" class="col-sm-1 control-label">Descripción</label>
        <div class="col-md-11">
            <input type="text" name="descripcion" class="form-control" placeholder="Describa la relación con otro cargo"/>
        </div>
    </div>
    <button class="btn btn-primary pull-right">Registrar relación</button>
</form>