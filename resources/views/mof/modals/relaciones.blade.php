<!-- Modal para editar -->
<div id="modalRelacion" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar la relación seleccionada</h4>
            </div>
            <form action="{{ url('cargos/relaciones/modificar') }}">
                <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value=""/>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <div>
                                <input type="radio" name="tipo" value="interna"/> Relación interna
                                <input type="radio" name="tipo" value="externa"/> Relación externa
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Descripción</label>
                            <input type="text" name="descripcion" class="form-control" placeholder="Describa la relación con otro cargo"/>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
