// Activa el uso de un template
function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

// Renderiza #template-alerta con el mensaje indicado
// y lo sitúa como primer hijo de $target
function renderTemplateAlerta($target, mensaje) {
    var $alerta = activateTemplate('#template-alerta');
    $alerta.find('span').text(mensaje);
    $target.prepend($alerta);
}

// Actualiza la enumeración en una tabla
// sobre los <td> que tengan asignados un [data-i]
function actualizarEnumeracion($tabla) {
    var i = 0;
    $tabla.find('tbody').find('tr').each(function() {
        $(this).find('[data-i]').text(++i);
    });
}
