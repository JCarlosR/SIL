$(document).on('ready', function() {
    // Evento de envío de formularios (registro)
    $('form').on('submit', registrarSkill);
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