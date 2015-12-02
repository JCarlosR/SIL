$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    // Seleccionar elementos de interfaz
    $modalEditar = $('#modalEditar');
    $modalEliminar = $('#modalEliminar');
    // Al hacer click en un detalle, se permite editarlo
    $('[data-id]').on('click', mostrarEditar);
    $('[data-eliminar]').on('click', mostrarEliminar);

}

// Referencia a elementos de interfaz
var $modalEditar;
var $modalEliminar;

function mostrarEditar() {
    // Cargar datos previos
    var idEditar = $(this).data('id');
    $modalEditar.find('[name="id"]').val(idEditar);

    var descripcion = $(this).data('descripcion');
    $modalEditar.find('[name="descripcion"]').val(descripcion);

    // Mostrar modal
    $modalEditar.modal('show');
}

function mostrarEliminar() {
    // Cargar datos previos
    var idEliminar = $(this).data('semidelete');
    $modalEliminar.find('[name="id"]').val(idEliminar);

    var descripcion = $(this).data('descripcion');
    $modalEliminar.find('[name="descripcion"]').val(descripcion);

    // Mostrar modal
    $modalEliminar.modal('show');
}