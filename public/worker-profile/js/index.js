$(document).on('ready', function() {
    // Evento de envío de formularios (registro)
    $('form').on('submit', registrarSkill);
});

var rpta;

function registrarSkill() {
    event.preventDefault();

    $form = $(this);

    $.ajax({
        url: 'registrar/skill',
        type: 'POST',
        data: $form.serialize(),
        success: function (data) {

            // $form.agregarFila();
        },
        error: function (data) {
            var errors = data.responseJSON;

            $.each(errors, function (i, value) {
                renderTemplateAlerta($form, value);
            });
        }
    });
}

// Funciones relacionadas al template HTML5
function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

function renderTemplateAlerta($target, mensaje) {
    var $clone = activateTemplate('#template-alerta');
    $clone.find('span').html(mensaje);
    $target.before($clone);
}