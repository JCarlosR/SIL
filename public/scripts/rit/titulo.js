var $modalEditar;
var $formEditar;

$(document).on('ready', function() {
    // Referencias a usar
    $modalEditar = $('#modalEditar');
    $formEditar = $('#formEditar');

    _token = $('[name="_token"]').val();

    // Evento de env�o de formularios (registro)
    $('form').on('submit', registrarTitulo);

    // Evento para mostrar el modal de edici�n
    $(document).on('click', '[data-editar]', mostrarModal);

    // Evento para guardar los cambios de edici�n
    $formEditar.on('submit', guardarCambios);

});


var $filaEditar;

function registrarTitulo() {
    event.preventDefault();

    $form = $(this);

    $.ajax({
        url: '../registrar/titulo',
        type: 'POST',
        data: $form.serialize(),
        success: function (data) {
            location.reload();
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
    $filaEditar = $(this).parents('tr');
    var id = $(this).data('editar');

    var nombre = $filaEditar.find('[data-nombre]').text();

    $formEditar.find('[name="id"]').val(id);
    $formEditar.find('[name="nombre"]').val(nombre);

    // Mostrar el modal
    $modalEditar.modal('show');
}

function guardarCambios() {
    event.preventDefault();
    $form = $(this);

    $.ajax({
        url: '../modificar/titulo',
        type: 'POST',
        data: $form.serialize(),
        success: function (data) {
            editarFila(data.nombre);
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

function editarFila(nombre) {
    $filaEditar.find('[data-nombre]').text(nombre);
}

function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

