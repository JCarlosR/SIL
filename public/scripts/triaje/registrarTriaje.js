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

function traerDatos(){
    //cadena que sera buscada en la base de datos
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
            var nombre = datos[i].nombre;

            agregarFila(id, hoja, nombre);
        }
    });
}

function elegirPaciente() {
    var id = $(this).data('id');
    var nombre = $(this).parent().prev().text();
    var hoja = $(this).parent().prev().prev().text();

    $('#formRegistraTriaje [name="paciente_id"]').val(id);
    $('#formRegistraTriaje [name="nombre"]').val(nombre);
    $('#formRegistraTriaje [name="txtHoja"]').val(hoja);
    $('#formRegistraTriaje [name="txtEmpresa"]').val('Cartavio SAC');
    $('#formRegistraTriaje [name="txtHijos"]').val('2');
    $('#formRegistraTriaje [name="txtEstudios"]').val('Secundaria completa');
    $modalBuscar.modal('hide');
}




function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

function agregarFila(id, hoja, paciente) {
    var $fila = activateTemplate('#template-fila');
    $fila.find('[data-hoja]').text(hoja);
    $fila.find('[data-paciente]').text(paciente);
    $fila.find('[data-id]').data('id', id);

    var $tbody = $('table').find('tbody');
    $tbody.append($fila);
}