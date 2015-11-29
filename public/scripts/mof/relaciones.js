var $tablaRelaciones;
var $formRegistrarRelacion;
var $modalRelacion;
var $formEditarRelacion;

$(document).on('ready', function() {
    $tablaRelaciones = $('#tablaRelaciones');
    $formRegistrarRelacion = $('#formRegistrarRelacion');
    $modalRelacion = $('#modalRelacion');
    $formEditarRelacion = $('#modalRelacion form');

    // Evento submit sobre el form de registro
    $formRegistrarRelacion.on('submit', registrarRelacion);

    // Evento de click sobre los botones de editar
    $(document).on('click', '#tablaRelaciones [data-editar]', editarRelacion);
    // Evento de submit sobre el form de editar
    $formEditarRelacion.on('submit', updateRelacion);

    // Evento de click sobre los botones de eliminar
    $(document).on('click', '#tablaRelaciones [data-eliminar]', eliminarRelacion);
});

function registrarRelacion() {
    event.preventDefault();

    $.ajax({
        url: $formRegistrarRelacion.attr('action'),
        type: 'POST',
        data: $formRegistrarRelacion.serialize(),
        success: function (data) {
            agregarFilaRelacion(data.id, data.tipo, data.descripcion);
            $formRegistrarRelacion.find('input[name="descripcion"]').val('');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formRegistrarRelacion, value);
            });
        }
    });
}

function agregarFilaRelacion(id, tipo, descripcion) {
    var $fila = activateTemplate('#template-relacion');

    $fila.find('[data-tipo]').text('Relación '+tipo);
    $fila.find('[data-descripcion]').text(descripcion);

    $fila.find('[data-editar]').data('editar', id);
    $fila.find('[data-eliminar]').data('eliminar', id);

    $tablaRelaciones.find('tbody').append($fila);
    actualizarEnumeracion($tablaRelaciones);
}

// Fila en edición
var $filaEditar;

function editarRelacion() {
    // Pre-cargamos los datos
    $filaEditar = $(this).parents('tr');
    var id = $filaEditar.find('[data-editar]').data('editar');
    var tipo = $filaEditar.find('[data-tipo]').text().split(' ')[1];
    var descripcion = $filaEditar.find('[data-descripcion]').text();

    // Asignamos datos actuales
    $formEditarRelacion.find('[name="id"]').val(id);
    $formEditarRelacion.find('[name="tipo"]') // seleccionamos los radios,
        .prop('checked', false) // les quitamos la selección y
        .filter('[value="'+tipo+'"]').prop('checked', true); // activamos el adecuado
    $formEditarRelacion.find('[name="descripcion"]').val(descripcion);

    // Mostramos el modal
    $modalRelacion.modal('show');
}

function updateRelacion(event) {
    event.preventDefault();

    $.ajax({
        url: $formEditarRelacion.attr('action'),
        type: 'POST',
        data: $formEditarRelacion.serialize(),
        success: function (data) {
            $filaEditar.find('[data-tipo]').text('Relación '+data.tipo);
            $filaEditar.find('[data-descripcion]').text(data.descripcion);
            $modalRelacion.modal('hide');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formEditarRelacion.find('.modal-body'), value);
            });
        }
    });
}

function eliminarRelacion() {
    var $filaEliminar = $(this).parents('tr');
    var idEliminar = $(this).data('eliminar');
    var csrf_token = $('[name="_token"]').val();

    $.ajax({
        url: '../../cargos/relaciones/eliminar',
        type: 'POST',
        data: { id: idEliminar, _token: csrf_token },
        success: function () {
            $filaEliminar.fadeOut('slow', function() {
                $(this).remove();
                actualizarEnumeracion($tablaRelaciones);
            });
        },
        error: function () {
            renderTemplateAlerta($('#relaciones .panel-body'), 'Ocurrió un problema al intentar eliminar la relación.');
        }
    });
}