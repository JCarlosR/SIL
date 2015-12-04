$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    // Seleccionar elementos de interfaz

    $modalBuscar = $('#buscarPaciente');
    // Al hacer click en un detalle, se permite editarlo
    $('[data-buscar]').on('click', mostrarBuscar);
    $modalBuscar.find('[name="buscado"]').on('blur', traerDatos);

    //boton para elegir paciente
    $(document).on('click', '[data-id]', elegirPaciente);

}
var $modalBuscar;

function mostrarBuscar() {

    $modalBuscar.modal('show');
}

function traerDatos() {
    // Cadena que será buscada en la base de datos
    var buscado = $(this).val();

    $.ajax({
        type: 'GET',
        url: '../pacientes/listar',
        data: {inicio: buscado},
        dataType: 'json',
        encode: true
    }).done(function(datos){
        $('tbody tr').remove();
        for (i = 0; i < datos.length; i++) {

            var id = datos[i].id;
            var hoja = 'HDR-00'+id;
            var paciente = datos[i].nombre;
            var empresa = datos[i].nombre_comercial;
            var estudios = datos[i].estudios;

            agregarFila(id, hoja, paciente, empresa, estudios);
        }
    });
}

function elegirPaciente() {
    var id = $(this).data('id');
    var $fila = $(this).parents('tr');
    var nombre = $fila.find('[data-paciente]').text();
    var hoja = $fila.find('[data-hoja]').text();
    var empresa = $fila.find('[data-empresa]').text();
    var estudios = $fila.find('[data-estudios]').text();

    $('#formRegistraTriaje [name="paciente_id"]').val(id);
    $('#formRegistraTriaje [name="nombre"]').val(nombre);
    $('#formRegistraTriaje [name="txtHoja"]').val(hoja);

    // Sorry, but i have to do this hacky method
    var orden = parseInt(hoja.split('-')[1]);

    $('#formRegistraTriaje [name="orden_id"]').val(orden);
    $('#formRegistraTriaje [name="txtEmpresa"]').val(empresa);
    $('#formRegistraTriaje [name="txtEstudios"]').val(estudios);
    $modalBuscar.modal('hide');
}




function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

function agregarFila(id, hoja, paciente, empresa, estudios) {
    var $fila = activateTemplate('#template-fila');
    $fila.find('[data-id]').data('id', id);
    $fila.find('[data-hoja]').text(hoja);
    $fila.find('[data-paciente]').text(paciente);
    $fila.find('[data-empresa]').text(empresa);
    $fila.find('[data-estudios]').text(estudios);

    var $tbody = $('table').find('tbody');
    $tbody.append($fila);
}