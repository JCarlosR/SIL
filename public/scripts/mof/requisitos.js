var $tablaRequisitos;
var $formRegistrarRequisito;
var $modalRequisito;
var $formEditarRequisito;

$(document).on('ready', function() {
    $tablaRequisitos = $('#tablaRequisitos');
    $formRegistrarRequisito = $('#formRegistrarRequisito');
    $modalRequisito = $('#modalRequisito');
    $formEditarRequisito = $('#modalRequisito form');

    // Evento submit sobre el form de registro
    $formRegistrarRequisito.on('submit', registrarRequisito);

    // Evento de click sobre los botones de editar
    $(document).on('click', '#tablaRequisitos [data-editar]', editarRequisito);
    // Evento de submit sobre el form de editar
    $formEditarRequisito.on('submit', updateRequisito);

    // Evento de click sobre los botones de eliminar
    $(document).on('click', '#tablaRequisitos [data-eliminar]', eliminarRequisito);
});

function registrarRequisito() {
    event.preventDefault();

    $.ajax({
        url: $formRegistrarRequisito.attr('action'),
        type: 'POST',
        data: $formRegistrarRequisito.serialize(),
        success: function (data) {
            agregarFilaRequisito(data.id, data.nombre, data.descripcion);
            $formRegistrarRequisito.find('input[name="nombre"]').val('');
            $formRegistrarRequisito.find('input[name="descripcion"]').val('');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formRegistrarRequisito, value);
            });
        }
    });
}

function agregarFilaRequisito(id, nombre, descripcion) {
    var $fila = activateTemplate('#template-requisito');

    $fila.find('[data-nombre]').text(nombre);
    $fila.find('[data-descripcion]').text(descripcion);

    $fila.find('[data-editar]').data('editar', id);
    $fila.find('[data-eliminar]').data('eliminar', id);

    $tablaRequisitos.find('tbody').append($fila);
    actualizarEnumeracion($tablaRequisitos);
}

// Fila en edición
var $filaEditar;

function editarRequisito() {
    // Pre-cargamos los datos
    $filaEditar = $(this).parents('tr');
    var id = $filaEditar.find('[data-editar]').data('editar');
    var nombre = $filaEditar.find('[data-nombre]').text();
    var descripcion = $filaEditar.find('[data-descripcion]').text();

    // Asignamos datos actuales
    $formEditarRequisito.find('[name="id"]').val(id);
    $formEditarRequisito.find('[name="nombre"]').val(nombre);
    $formEditarRequisito.find('[name="descripcion"]').val(descripcion);

    // Mostramos el modal
    $modalRequisito.modal('show');
}

function updateRequisito(event) {
    event.preventDefault();

    $.ajax({
        url: $formEditarRequisito.attr('action'),
        type: 'POST',
        data: $formEditarRequisito.serialize(),
        success: function (data) {
            $filaEditar.find('[data-nombre]').text(data.nombre);
            $filaEditar.find('[data-descripcion]').text(data.descripcion);
            $modalRequisito.modal('hide');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formEditarRequisito.find('.modal-body'), value);
            });
        }
    });
}

function eliminarRequisito() {
    var $filaEliminar = $(this).parents('tr');
    var idEliminar = $(this).data('eliminar');
    var csrf_token = $('[name="_token"]').val();

    $.ajax({
        url: '../../cargos/requisitos/eliminar',
        type: 'POST',
        data: { id: idEliminar, _token: csrf_token },
        success: function () {
            $filaEliminar.fadeOut('slow', function() {
                $(this).remove();
                actualizarEnumeracion($tablaRequisitos);
            });
        },
        error: function () {
            renderTemplateAlerta($('#requisitos .panel-body'), 'Ocurrió un problema al intentar eliminar el requisito.');
        }
    });
}