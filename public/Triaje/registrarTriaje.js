$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    // Seleccionar elementos de interfaz

    $modalBuscar = $('#buscarPaciente');
    // Al hacer click en un detalle, se permite editarlo
    $('[data-buscar]').on('click', mostrarBuscar);
    $modalBuscar.find('[name="buscado"]').on('blur', traerDatos )

}
var $modalBuscar;

function mostrarBuscar() {
    //Cargar datos previos
    //var idEditar = $(this).data('id');
    //$modalEditar.find('[name="id"]').val(idEditar);
    //
    //var nombre = $(this).next().text();
    //$modalEditar.find('[name="nombre"]').val(nombre);
    //
    //var descripcion = $(this).attr('title');
    //$modalEditar.find('[name="descripcion"]').val(descripcion);
    //
    //var precio = $(this).data('precio');
    //$modalEditar.find('[name="precio"]').val(precio);

    // Mostrar modal
    $modalBuscar.modal('show');
}

function traerDatos(){
    //cadena que sera buscada en la base de datos
    var buscado = $(this).val();

    $.ajax({
        type: 'POST',
        url: location.href,
        data: buscado,
        dataType: 'json',
        encode: true
    }).done(function(datos){
        if(datos.exito){

        }
        else
            alert('No se pudo realizar la asignación.');
    });

    alert("Onblur   "+buscado);

}