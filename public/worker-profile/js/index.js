var $modalEditar;

$(document).on('ready', function() {
    // Referencias a usar
    $modalEditar = $('#modalEditar');

    // Evento de envío de formularios (registro)
    $('form').on('submit', registrarSkill);

    // Evento para mostrar el modal de edición
    $('[data-editar]').on('click', mostrarModal);
});

function registrarSkill() {
    event.preventDefault();

    $form = $(this);

    $.ajax({
        url: 'registrar/skill',
        type: 'POST',
        data: $form.serialize(),
        success: function (data) {
            agregarFila($form.prev('table'), data.id, data.name, data.description);
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($form, value);
            });
        }
    });
}

function mostrarModal() {
    // Cargar los datos al modal
    var $tr = $(this).parents('tr');
    var id = $(this).data('editar');

    var nombre = $tr.find('[data-name]').text();
    var descripcion = $tr.find('[data-description]').text();

    $modalEditar.find('[name="id"]').val(id);
    $modalEditar.find('[name="name"]').val(nombre);
    $modalEditar.find('[name="description"]').val(descripcion);

    // Mostrar el modal
    $modalEditar.modal('show');
}

// En adelante, funciones de ayuda

function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

function renderTemplateAlerta($target, mensaje) {
    var $alerta = activateTemplate('#template-alerta');
    $alerta.find('span').text(mensaje);
    $target.before($alerta);
}

function agregarFila($table, id, nombre, descripcion) {
    var $fila = activateTemplate('#template-fila');
    $fila.find('[data-name]').text(nombre);
    $fila.find('[data-description]').text(descripcion);
    $fila.find('[data-editar]').data('editar', id);

    $tbody = $table.find('tbody');
    $tbody.append($fila);

    actualizarEnumeracion($tbody);
}

function actualizarEnumeracion($tbody) {
    var i = 0;
    $tbody.find('tr').each(function() {
        $(this).find('[data-i]').text(++i);
    });
}