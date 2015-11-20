$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    // Al hacer click en un plato, se permite mostrar sus detalles
    $('#btnAgregar').on('click', agregarFila);
    $('#btnRegistrar').on('click', guardarProtocolo);
}

function agregarFila() {
    var nombre = $('#txtNombre').val();
    var dni = $('#txtDNI').val();
    var perfil = $('#cboPerfil').val();

    $('.table tr:last').after('<tr><td>1</td><td>'+nombre+'</td><td>'+dni+'</td><td>'+perfil+'</td></tr>');

}

function actualizarEnumeracion($tbody) {
    var i = 0;
    $tbody.find('tr').each(function() {
        $(this).find('[data-i]').text(++i);
    });
}

function guardarProtocolo(){
    var filas=Array();
    var n= 0;
    var entro = false;

    $(".table tbody tr").each(function(index1){
        var campo1,campo2,campo3,campo4;
        $(this).find("td").each(function(index2){
            switch (index2) {
                case 0:
                    campo1 = $(this).text();
                    entro = true;
                    break;
                case 1:
                    campo2 = $(this).text();
                    entro = true;
                    break;
                case 2:
                    campo3 = $(this).text();
                    entro = true;
                    break;
                case 3:
                    campo4 = $(this).text();
                    entro = true;
                    break;
            }
        });
        if(entro) {
            filas[n] = [campo1, campo2, campo3, campo4];
            n++;
            entro = false;
        }
    });

    var datosEnviados =
    {
        'filas': filas,
        'id': $('#max').text(),
        'empresa': $('#cboEmpresa').val()
    };

    $.ajax({
        type: 'POST',
        url: 'asignarProtocolo',
        data: datosEnviados,
        dataType: 'json',
        encode: true
    }).done(function(datos){
        if(datos.exito){
            alert('Se realizo el registro satisfactoriamente');
            // Redirigir a asignar examenes
        }
        else
            alert('No se pudo realizar la asignación.');
    });

}