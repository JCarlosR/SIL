var $modalEditar;
var $formEditar;

$(document).on('ready', function() {
    // Referencias a usar
    $modalEditar = $('#modalEditar');
    $formEditar = $('#formEditar');

    // Evento para mostrar el modal de edición
    $(document).on('click', '[data-editar]', mostrarModal);

    // Evento para guardar los cambios de edición
    $formEditar.on('submit', guardarCambios);

});


var $filaEditar;

function mostrarModal() {
    // Cargar los datos al modal
    $filaEditar = $(this).parents('tr');
    var id = $(this).data('editar');

    var objeto = $filaEditar.find('[data-objeto]').text();
    var alcance = $filaEditar.find('[data-alcance]').text();

    $formEditar.find('[name="id"]').val(id);
    $formEditar.find('[name="objeto"]').val(objeto);
    $formEditar.find('[name="alcance"]').val(alcance);

    // Mostrar el modal
    $modalEditar.modal('show');
}

function guardarCambios() {
    event.preventDefault();
    $form = $(this);

    $.ajax({
        url: '../modificar/rit',
        type: 'POST',
        data: $form.serialize(),
        success: function (data) {
            editarFila(data.objeto, data.alcance);
            $modalEditar.modal('hide');
        },
        error: function (data) {
            var errors = data.responseJSON;
            $.each(errors, function (i, value) {
                renderTemplateAlerta($modalEditar.find('.modal-body'), value);
            });
        }
    });
}



// En adelante, funciones de ayuda

function renderTemplateAlerta($target, mensaje) {
    var $alerta = activateTemplate('#template-alerta');
    $alerta.find('span').text(mensaje);
    $target.prepend($alerta);
}


function editarFila(objeto, alcance) {
    $filaEditar.find('[data-objeto]').text(objeto);
    $filaEditar.find('[data-alcance]').text(alcance);
}

function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}