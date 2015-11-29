var $tablaFunciones;
var $formRegistrarFuncion;
var $modalFuncion;
var $formEditarFuncion;

$(document).on('ready', function() {
    $tablaFunciones = $('#tablaFunciones');
    $formRegistrarFuncion = $('#formRegistrarFuncion');
    $modalFuncion = $('#modalFuncion');
    $formEditarFuncion = $('#modalFuncion form');

    // Evento submit sobre el form de registro
    $formRegistrarFuncion.on('submit', registrarFuncion);

    // Evento de click sobre los botones de editar
    $(document).on('click', '#tablaFunciones [data-editar]', editarFuncion);
    // Evento de submit sobre el form de editar
    $formEditarFuncion.on('submit', updateFuncion);

    // Evento de click sobre los botones de eliminar
    $(document).on('click', '#tablaFunciones [data-eliminar]', eliminarFuncion);
});

function registrarFuncion() {
    event.preventDefault();

    $.ajax({
        url: $formRegistrarFuncion.attr('action'),
        type: 'POST',
        data: $formRegistrarFuncion.serialize(),
        success: function (data) {
            agregarFilaFuncion(data.id, data.tipo, data.descripcion);
            $formRegistrarFuncion.find('input[name="descripcion"]').val('');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formRegistrarFuncion, value);
            });
        }
    });
}

function agregarFilaFuncion(id, tipo, descripcion) {
    var $fila = activateTemplate('#template-funcion');

    $fila.find('[data-tipo]').text('Relación '+tipo);
    $fila.find('[data-descripcion]').text(descripcion);

    $fila.find('[data-editar]').data('editar', id);
    $fila.find('[data-eliminar]').data('eliminar', id);

    $tablaFunciones.find('tbody').append($fila);
    actualizarEnumeracion($tablaFunciones);
}

// Fila en edición
var $filaEditar;

function editarFuncion() {
    // Pre-cargamos los datos
    $filaEditar = $(this).parents('tr');
    var id = $filaEditar.find('[data-editar]').data('editar');
    var tipo = $filaEditar.find('[data-tipo]').text().split(' ')[1];
    var descripcion = $filaEditar.find('[data-descripcion]').text();

    // Asignamos datos actuales
    $formEditarFuncion.find('[name="id"]').val(id);
    $formEditarFuncion.find('[name="tipo"]') // seleccionamos los radios,
        .prop('checked', false) // les quitamos la selección y
        .filter('[value="'+tipo+'"]').prop('checked', true); // activamos el adecuado
    $formEditarFuncion.find('[name="descripcion"]').val(descripcion);

    // Mostramos el modal
    $modalFuncion.modal('show');
}

function updateFuncion(event) {
    event.preventDefault();

    $.ajax({
        url: $formEditarFuncion.attr('action'),
        type: 'POST',
        data: $formEditarFuncion.serialize(),
        success: function (data) {
            $filaEditar.find('[data-tipo]').text('Relación '+data.tipo);
            $filaEditar.find('[data-descripcion]').text(data.descripcion);
            $modalFuncion.modal('hide');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formEditarFuncion.find('.modal-body'), value);
            });
        }
    });
}

function eliminarFuncion() {
    var $filaEliminar = $(this).parents('tr');
    var idEliminar = $(this).data('eliminar');
    var csrf_token = $('[name="_token"]').val();

    $.ajax({
        url: '../../cargos/funciones/eliminar',
        type: 'POST',
        data: { id: idEliminar, _token: csrf_token },
        success: function () {
            $filaEliminar.fadeOut('slow', function() {
                $(this).remove();
                actualizarEnumeracion($tablaFunciones);
            });
        },
        error: function () {
            renderTemplateAlerta($('#funciones .panel-body'), 'Ocurrió un problema al intentar eliminar la función.');
        }
    });
}