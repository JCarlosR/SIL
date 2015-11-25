var $formRegistrar;

$(document).on('ready', function() {
    $formRegistrar = $('#formRegistrar');

    // Evento de envío de formularios (registro)
    $formRegistrar.on('submit', registrarCargo);
});

function registrarCargo() {
    event.preventDefault();

    $.ajax({
        url: 'cargo/registrar',
        type: 'POST',
        data: $formRegistrar.serialize(),
        success: function (data) {
            agregarFila(data.id, data.unidad, data.nombre, data.funcion);
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta(value);
            });
        }
    });
}

// En adelante, funciones de ayuda

function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

function renderTemplateAlerta(mensaje) {
    var $alerta = activateTemplate('#template-alerta');
    $alerta.find('span').text(mensaje);
    $formRegistrar.prepend($alerta);
}

function agregarFila(id, unidad, nombre, funcion) {
    var $fila = activateTemplate('#template-fila');
    $fila.find('[data-unidad]').text(unidad);
    $fila.find('[data-nombre]').text(nombre);
    $fila.find('[data-funcion]').text(funcion);
    $fila.find('[data-editar] a').attr('href', 'cargos/'+id);

    $('tbody').append($fila);
    actualizarEnumeracion();
}

function actualizarEnumeracion() {
    var i = 0;
    $('table tbody').find('tr').each(function() {
        $(this).find('[data-i]').text(++i);
    });
}