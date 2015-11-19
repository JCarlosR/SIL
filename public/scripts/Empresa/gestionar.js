$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    // Al hacer click en un plato, se permite mostrar sus detalles
    $('#btnRegistrar').on('click', registrarEmpresa);
}

function registrarEmpresa() {

    var datosEnviados =
    {
        'nombre_comercial': $('#txtnombre').val(),
        'ruc': $('#txtruc').val(),
        'web': $('#txtweb').val(),
        'contacto1': $('#txtc1').val(),
        'contacto2': $('#txtc2').val()
    };

    $.ajax({
        type: 'POST',
        url: 'asignarEmpresa',
        data: datosEnviados,
        dataType: 'json',
        encode: true
    }).done(function(datos){
        if(datos.exito){
            alert('Se realizo el registro con éxito');
            $('#txtnombre').val('');
            $('#txtruc').val('');
            $('#txtweb').val('');
            $('#txtc1').val('');
            $('#txtc2').val('');
        }
        else
            alert('No se pudo realizar la asignación.');
    });
}