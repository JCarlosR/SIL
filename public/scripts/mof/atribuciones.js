var $tablaAtribuciones;
var $formRegistrarAtribucion;
var $modalAtribucion;
var $formEditarAtribucion;

$(document).on('ready', function() {
    $tablaAtribuciones = $('#tablaAtribuciones');
    $formRegistrarAtribucion = $('#formRegistrarAtribucion');
    $modalAtribucion = $('#modalAtribucion');
    $formEditarAtribucion = $('#modalAtribucion form');

    // Evento submit sobre el form de registro
    $formRegistrarAtribucion.on('submit', registrarAtribucion);

    // Evento de click sobre los botones de editar
    $(document).on('click', '#tablaAtribuciones [data-editar]', editarAtribucion);
    // Evento de submit sobre el form de editar
    $formEditarAtribucion.on('submit', updateAtribucion);

    // Evento de click sobre los botones de eliminar
    $(document).on('click', '#tablaAtribuciones [data-eliminar]', eliminarAtribucion);
});

function registrarAtribucion() {
    event.preventDefault();

    $.ajax({
        url: $formRegistrarAtribucion.attr('action'),
        type: 'POST',
        data: $formRegistrarAtribucion.serialize(),
        success: function (data) {
            agregarFilaAtribucion(data.id, data.tipo, data.descripcion);
            $formRegistrarAtribucion.find('input[name="descripcion"]').val('');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formRegistrarAtribucion, value);
            });
        }
    });
}

function agregarFilaAtribucion(id, tipo, descripcion) {
    var $fila = activateTemplate('#template-atribucion');

    $fila.find('[data-tipo]').text('Relación '+tipo);
    $fila.find('[data-descripcion]').text(descripcion);

    $fila.find('[data-editar]').data('editar', id);
    $fila.find('[data-eliminar]').data('eliminar', id);

    $tablaAtribuciones.find('tbody').append($fila);
    actualizarEnumeracion($tablaAtribuciones);
}

// Fila en edición
var $filaEditar;

function editarAtribucion() {
    // Pre-cargamos los datos
    $filaEditar = $(this).parents('tr');
    var id = $filaEditar.find('[data-editar]').data('editar');
    var tipo = $filaEditar.find('[data-tipo]').text().split(' ')[1];
    var descripcion = $filaEditar.find('[data-descripcion]').text();

    // Asignamos datos actuales
    $formEditarAtribucion.find('[name="id"]').val(id);
    $formEditarAtribucion.find('[name="tipo"]') // seleccionamos los radios,
        .prop('checked', false) // les quitamos la selección y
        .filter('[value="'+tipo+'"]').prop('checked', true); // activamos el adecuado
    $formEditarAtribucion.find('[name="descripcion"]').val(descripcion);

    // Mostramos el modal
    $modalAtribucion.modal('show');
}

function updateAtribucion(event) {
    event.preventDefault();

    $.ajax({
        url: $formEditarAtribucion.attr('action'),
        type: 'POST',
        data: $formEditarAtribucion.serialize(),
        success: function (data) {
            $filaEditar.find('[data-tipo]').text('Relación '+data.tipo);
            $filaEditar.find('[data-descripcion]').text(data.descripcion);
            $modalAtribucion.modal('hide');
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($formEditarAtribucion.find('.modal-body'), value);
            });
        }
    });
}

function eliminarAtribucion() {
    var $filaEliminar = $(this).parents('tr');
    var idEliminar = $(this).data('eliminar');
    var csrf_token = $('[name="_token"]').val();

    $.ajax({
        url: '../../cargos/atribuciones/eliminar',
        type: 'POST',
        data: { id: idEliminar, _token: csrf_token },
        success: function () {
            $filaEliminar.fadeOut('slow', function() {
                $(this).remove();
                actualizarEnumeracion($tablaAtribuciones);
            });
        },
        error: function () {
            renderTemplateAlerta($('#atribuciones .panel-body'), 'Ocurrió un problema al intentar eliminar la atribución.');
        }
    });
}